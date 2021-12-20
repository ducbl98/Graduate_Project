<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeekerController extends Controller
{
    public function showProfile(){
        $seekerId = Auth::id();
        $seekerProfile = User::with('seeker')->find($seekerId);
        return view('seeker.profile',compact('seekerProfile'));
    }

    public function updateAvatar(Request $request){
        $avatarImage = $request->seekerAvatar;
        dd($avatarImage);
    }
}
