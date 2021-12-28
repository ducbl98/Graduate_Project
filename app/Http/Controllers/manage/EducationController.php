<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Seeker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function addEducation(Request $request): RedirectResponse
    {
        $seeker = Seeker::with('user')->where('user_id',Auth::id())->first();
        Education::create([
            'facility' => $request->facility,
            'major' => $request->major,
            'degree' => $request->degree,
            'time_start' => $request->time_start,
            'state' => $request->state,
            'seeker_id' => $seeker->id,
        ]);
        return back();
    }

    public function editEducation(Request $request): RedirectResponse
    {
        Education::where('id',$request->id)->update([
            'facility' => $request->facility,
            'major' => $request->major,
            'degree' => $request->degree,
            'time_start' => $request->time_start,
            'state' => $request->state,
        ]);

        return back();
    }

    public function deleteEducation(Request $request)
    {
        Education::where('id',$request->id)->delete();
        return back();
    }
}
