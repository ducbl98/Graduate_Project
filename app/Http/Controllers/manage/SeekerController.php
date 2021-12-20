<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Seeker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SeekerController extends Controller
{
    public function showProfile(){
        $seekerId = Auth::id();
        $seekerProfile = User::with('seeker')->find($seekerId);
        return view('seeker.profile',compact('seekerProfile'));
    }

    public function updateAvatar(Request $request){
        $seeker = Seeker::with('user')->find($request->id);
        $avatar = $request->seekerAvatar;
//        dd($request->hasFile('seekerAvatar'));
        if ($request->hasFile('seekerAvatar')) {
            $avatarCurrent = $seeker->avatar_url;
            if ($avatarCurrent) {
                Storage::delete('public/images/seekers/' . $avatarCurrent);
            }
            $newAvatarName = time() . '-' . $seeker->user->name . "." . $avatar->getClientOriginalExtension();
            $request->file('seekerAvatar')->storeAs('images/seekers', $newAvatarName);
            $seeker->avatar_url = 'images/seekers/'.$newAvatarName;
        }
        $seeker->save();
        return redirect()->route('seeker.profile.show');
    }
}
