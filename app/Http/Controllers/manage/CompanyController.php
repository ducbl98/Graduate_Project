<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function showProfile(){
        $companyId = Auth::id();
        $companyProfile = User::with('company')->find($companyId);
        $provinces = Province::all();
        return view('company.profile',compact('companyProfile','provinces'));
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

    public function updateProfile(Request $request): RedirectResponse
    {
        $company = Company::with('user')->where('user_id',Auth::id())->first();
        $avatar = $request->company_avatar;
        if ($request->hasFile('company_avatar')) {
            $avatarCurrent = $company->avatar_url;
            if ($avatarCurrent) {
                Storage::delete($avatarCurrent);
            }
            $newAvatarName = time() . '-' . $company->user->name . "." . $avatar->getClientOriginalExtension();
            $request->file('company_avatar')->storeAs('images/companies', $newAvatarName);
            $company->avatar_url = 'images/companies/'.$newAvatarName;
        }
        $company->save();

        User::where('id',Auth::id())->update(['name' => $request->name]);
        Company::where('user_id',Auth::id())->update([
            'contact_name' => $request->contact_name,
            'phone_number' => $request->phone_number,
            'province_id' => $request->province_id,
            'size' => $request->size,
            'website' => $request->website,
            'description' => $request->description,
            'address' => $request->address,
        ]);
        return redirect()->route('company.profile.show');
    }
}
