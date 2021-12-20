<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Seeker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function addExperience(Request $request): RedirectResponse
    {
        $seeker = Seeker::with('user')->find(Auth::id());
        Experience::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'time_start' => $request->time_start,
            'time_finish' => $request->time_finish,
            'seeker_id' => $seeker->id,
        ]);
        return redirect()->route('seeker.profile.show');    }
}
