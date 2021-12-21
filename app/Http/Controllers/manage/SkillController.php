<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Seeker;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function addSkill(Request $request): RedirectResponse
    {
        $seeker = Seeker::with('user')->find(Auth::id());
        Skill::create([
            'name' => $request->name,
            'level' => $request->level,
            'seeker_id' => $seeker->id,
        ]);
        return back();
    }

    public function editSkill(Request $request): RedirectResponse
    {
        Experience::where('id',$request->id)->update([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'time_start' => $request->time_start,
            'time_finish' => $request->time_finish,
        ]);

        return back();
    }

    public function deleteSkill(Request $request): RedirectResponse
    {
        Experience::where('id',$request->id)->delete();
        return back();
    }
}
