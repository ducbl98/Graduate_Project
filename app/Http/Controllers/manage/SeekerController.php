<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeekerImageUpdateRequest;
use App\Http\Requests\SeekerProfileUpdateRequest;
use App\Models\Seeker;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SeekerController extends Controller
{
    public function showProfile(){
        $seekerId = Auth::id();
        $seekerProfile = User::with('seeker.experiences','seeker.skills','seeker.educations')->find($seekerId);
        return view('seeker.profile',compact('seekerProfile'));
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
            $seeker->avatar_url = 'images/seekers/'.$newAvatarName;
        }
        $seeker->save();
        return redirect()->route('seeker.profile.show');
    }

    public function updateProfile(SeekerProfileUpdateRequest $request): RedirectResponse
    {
        User::where('id',$request->id)->update(['name' => $request->name]);
        Seeker::where('user_id',$request->id)->update([
            'phone_number' => $request->phone_number,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
        ]);
        return redirect()->route('seeker.profile.show');
    }
}
