<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobApplyRequest;
use App\Http\Requests\SeekerImageUpdateRequest;
use App\Http\Requests\SeekerProfileUpdateRequest;
use App\Models\Seeker;
use App\Models\SeekerApplication;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SeekerController extends Controller
{
    public function showProfile()
    {
        $seekerId = Auth::id();
        $seekerProfile = User::with('seeker.experiences', 'seeker.skills', 'seeker.educations')->find($seekerId);
        return view('seeker.profile', compact('seekerProfile'));
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
        $appliedJobs = SeekerApplication::with('user', 'job')->where([
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


}
