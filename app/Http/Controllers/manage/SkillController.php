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
        $seeker = Seeker::with('user')->where('user_id',Auth::id())->first();
        Skill::create([
            'name' => $request->name,
            'level' => $request->level,
            'seeker_id' => $seeker->id,
        ]);
        return back();
    }

    public function editSkill(Request $request): RedirectResponse
    {
        Skill::where('id',$request->id)->update([
            'name' => $request->name,
            'level' => $request->level,
        ]);

        return back();
    }

    public function deleteSkill(Request $request): RedirectResponse
    {
        Skill::where('id',$request->id)->delete();
        return back();
    }
}
