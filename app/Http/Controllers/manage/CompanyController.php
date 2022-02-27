<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRegisterRequest;
use App\Http\Requests\CompanyResponseRequest;
use App\Models\Company;
use App\Models\CompanyResponse;
use App\Models\Job;
use App\Models\Province;
use App\Models\SeekerApplication;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CompanyController extends Controller
{
    public function showProfile()
    {
        $companyId = Auth::id();
        $companyProfile = User::with('company')->find($companyId);
        $provinces = Province::all();
        return view('company.profile', compact('companyProfile', 'provinces'));
    }

//    public function updateAvatar(SeekerImageUpdateRequest $request): RedirectResponse
//    {
//        $seeker = Seeker::with('user')->find($request->id);
//        $avatar = $request->seekerAvatar;
//        if ($request->hasFile('seekerAvatar')) {
//            $avatarCurrent = $seeker->avatar_url;
//            if ($avatarCurrent) {
//                Storage::delete($avatarCurrent);
//            }
//            $newAvatarName = time() . '-' . $seeker->user->name . "." . $avatar->getClientOriginalExtension();
//            $request->file('seekerAvatar')->storeAs('images/seekers', $newAvatarName);
//            $seeker->avatar_url = 'images/seekers/'.$newAvatarName;
//        }
//        $seeker->save();
//        return redirect()->route('seeker.profile.show');
//    }

    public function showChangePassword()
    {
        $companyId = Auth::id();
        $companyProfile = User::with('company')->find($companyId);
        return view('company.change-password',compact('companyProfile'));
    }

    public function changePassword(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'oldPassword'=>'required|string|min:6',
            'newPassword'=>'required|string|min:6|confirmed',
        ],[
            'required' => "Trường này là bắt buộc",
            'string' => "Yêu cầu kiểu chuỗi",
            'min' => "Yêu cầu độ dài tối thiểu :min ký tự",
            'confirmed' => "Mật khẩu nhập lại không khớp"
        ]);

        if (!(Hash::check($request->get('oldPassword'), Auth::user()->password))) {
            toastr()->error('Mật khẩu cũ không đúng !');
            return redirect()->back();
        }

        $user = Auth::user();
        $user->password = Hash::make($request->get('newPassword'));
        $user->save();
        toastr()->success('Thay đổi mật khẩu thành công !');
        return redirect()->back();
    }

    public function updateProfile(Request $request): RedirectResponse
    {
        $company = Company::with('user')->where('user_id', Auth::id())->first();
        $avatar = $request->company_avatar;
        if ($request->hasFile('company_avatar')) {
            $avatarCurrent = $company->avatar_url;
            if ($avatarCurrent) {
                Storage::delete($avatarCurrent);
            }
            $newAvatarName = time() . '-' . $company->user->name . "." . $avatar->getClientOriginalExtension();
            $request->file('company_avatar')->storeAs('images/companies', $newAvatarName);
            $company->avatar_url = 'images/companies/' . $newAvatarName;
            Job::where('created_by', $company->user_id)->update([
                'image' => 'images/companies/' . $newAvatarName,
            ]);
        }
        $company->save();

        User::where('id', Auth::id())->update(['name' => $request->name]);
        Company::where('user_id', Auth::id())->update([
            'contact_name' => $request->contact_name,
            'phone_number' => $request->phone_number,
            'province_id' => $request->province_id,
            'size' => $request->size,
            'website' => $request->website,
            'description' => $request->description,
            'address' => $request->address,
        ]);
        return back();
    }

    public function listCandidates()
    {
        $companyId = Auth::id();
        $companyProfile = User::with('company')->find($companyId);
        $candidates = SeekerApplication::with('user.seeker', 'job')
            ->whereRelation('job', 'jobs.created_by', '=', Auth::id())
            ->where('is_active', 1)
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('company.candidate-list', compact('candidates', 'companyProfile'));
    }

    public function detailCandidate($id)
    {
        $companyId = Auth::id();
        $companyProfile = User::with('company')->find($companyId);
        $candidateAppliedJob = SeekerApplication::with('user.seeker.experiences', 'user.seeker.educations', 'user.seeker.skills', 'job', 'response')
            ->where([
                ['id', '=', $id],
                ['is_active', '=', 1]
            ])->first();
//        dd($candidateAppliedJob);
        $cvCandidate = $candidateAppliedJob->getMedia();
        $isRespond = $candidateAppliedJob->is_respond;
        $isSkip = $candidateAppliedJob->is_skip;
//        dd($isSkip);
        return view('company.candidate-detail', compact('candidateAppliedJob', 'isRespond', 'cvCandidate', 'id', 'companyProfile','isSkip'));
    }

    public function downloadCandidateCV($id)
    {
        $candidateAppliedJob = SeekerApplication::where([
            ['id', '=', $id],
            ['is_active', '=', 1]
        ])->first();
//        dd($candidateAppliedJob);
        $cvCandidate = $candidateAppliedJob->getMedia();
        return $cvCandidate[0];
    }

    public function replyCandidate(CompanyResponseRequest $request): RedirectResponse
    {
//        dd($request);
        $responseFile = $request->attachment;
//        dd($responseFile);
        $company_response = CompanyResponse::create([
            'header' => $request->header,
            'content' => $request->get('content'),
            'attachment' => $responseFile ? $responseFile->getClientOriginalName() : null,
            'seeker_application_id' => $request->seeker_application_id
        ]);
        $seekerApplication = SeekerApplication::find($request->seeker_application_id);
        $seekerApplication->is_respond = 1;
        $seekerApplication->save();
        if ($responseFile) {
            $company_response->addMediaFromRequest('attachment')->toMediaCollection();
        }
        toastr()->success('Phản hồi ứng viên thành công !');
        return redirect()->route('company.candidate.detail', ['id' => $request->seeker_application_id]);
    }

    public function dismissCandidate(int $id): RedirectResponse
    {
//        dd($id);
        $seekerApplication = SeekerApplication::find($id);
//        dd($seekerApplication);
        $seekerApplication->is_skip=1;
        $seekerApplication->save();
        toastr()->success('Bỏ qua ứng viên thành công !');
        return redirect()->route('company.candidate.detail', ['id' => $id]);
    }
}
