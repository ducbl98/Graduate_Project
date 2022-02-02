<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobApplyRequest;
use App\Http\Requests\SeekerImageUpdateRequest;
use App\Http\Requests\SeekerProfileUpdateRequest;
use App\Models\CompanyResponse;
use App\Models\Seeker;
use App\Models\SeekerApplication;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class SeekerController extends Controller
{
    public function showProfile()
    {
        $seekerId = Auth::id();
        $seekerProfile = User::with('seeker.experiences', 'seeker.skills', 'seeker.educations')->find($seekerId);
        return view('seeker.profile', compact('seekerProfile'));
    }

    public function showChangePassword(){
        return view('seeker.change-password');
    }
    public function changePassword(Request $request){
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

    public function updateAvatar(SeekerImageUpdateRequest $request): RedirectResponse
    {
        $seeker = Seeker::with('user')->find($request->id);
        $avatar = $request->seeker_avatar;
        if ($request->hasFile('seeker_avatar')) {
            $avatarCurrent = $seeker->avatar_url;
            if ($avatarCurrent) {
                Storage::delete($avatarCurrent);
            }
            $newAvatarName = time() . '-' . $seeker->user->name . "." . $avatar->getClientOriginalExtension();
            $request->file('seeker_avatar')->storeAs('images/seekers', $newAvatarName);
            $seeker->avatar_url = 'images/seekers/' . $newAvatarName;
        }
        $seeker->save();
        return redirect()->route('seeker.profile.show');
    }

    public function updateProfile(SeekerProfileUpdateRequest $request): RedirectResponse
    {
        User::where('id', $request->id)->update(['name' => $request->name]);
        Seeker::where('user_id', $request->id)->update([
            'phone_number' => $request->phone_number,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
        ]);
        return redirect()->route('seeker.profile.show');
    }

    public function applyJob(JobApplyRequest $request)
    {
        $user = Auth::user();
//        dd($request);
        $cv = $request->resume;
        $seeker_application = SeekerApplication::create([
            'seeker_name' => $user->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'introduction' => $request->introduction,
            'resume' => $cv->getClientOriginalName(),
            'job_id' => $request->job_id,
            'user_id' => $request->user_id,
        ]);
        $seeker_application->addMediaFromRequest('resume')->toMediaCollection();
//        dd($seeker_application->getMedia());
        toastr()->success('Ứng tuyển công việc thành công !');
        return redirect()->back();
    }

    public function listAppliedJob()
    {
        $appliedJobs = SeekerApplication::with('user', 'job.user')->where([
            ['user_id', '=', Auth::id()],
            ['is_active', '=', 1]
        ])->get();
        return view('seeker.job-applied-list', compact('appliedJobs'));
    }

    public function detailAppliedJob($id)
    {
        $appliedJob = SeekerApplication::with('user.seeker.experiences', 'user.seeker.educations', 'user.seeker.skills', 'job')->where([
            ['user_id', '=', Auth::id()],
            ['id', '=', $id],
            ['is_active', '=', 1]
        ])->first();
//        dd($appliedJob);
        return view('seeker.job-applied-detail', compact('appliedJob'));
    }

    public function deleteAppliedJob($id): RedirectResponse
    {
        $appliedJob = SeekerApplication::where([
            ['user_id', '=', Auth::id()],
            ['id', '=', $id],
            ['is_active', '=', 1]
        ])->first();
        $appliedJob->is_active = 0;
        $appliedJob->save();
        return redirect()->back();
    }

    public function listCompanyResponses(){
        $companyResponses = CompanyResponse::with('seeker_application.job.user.company')
            ->whereRelation('seeker_application','seeker_applications.user_id','=',Auth::id())
            ->whereRelation('seeker_application','seeker_applications.is_respond','=',1)
            ->get();
//        dd($companyResponses);
        return view('seeker.company-response-list',compact('companyResponses'));
    }

    public function detailCompanyResponse($id){
        $companyResponse = CompanyResponse::with('seeker_application.job.user.company')
            ->whereRelation('seeker_application','seeker_applications.user_id','=',Auth::id())
            ->whereRelation('seeker_application','seeker_applications.is_respond','=',1)
            ->where('id',$id)->first();
//        dd($companyResponse);
        return view('seeker.company-response-detail',compact('companyResponse','id'));
    }

    public function downloadAttachmentCompany($id){
        $companyResponse = CompanyResponse::with('seeker_application.job.user.company')
            ->whereRelation('seeker_application','seeker_applications.user_id','=',Auth::id())
            ->whereRelation('seeker_application','seeker_applications.is_respond','=',1)
            ->where('id',$id)->first();
        $attachment = $companyResponse->getMedia();
        return $attachment[0];
    }


}
