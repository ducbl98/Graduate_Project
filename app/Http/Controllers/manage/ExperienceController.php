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
        $seeker = Seeker::with('user')->where('user_id',Auth::id())->first();
        Experience::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'time_start' => $request->time_start,
            'time_finish' => $request->time_finish,
            'seeker_id' => $seeker->id,
        ]);
        toastr()->success("Thêm kinh nghiệm làm việc thành công");
        return back();
    }

    public function editExperience(Request $request)
    {
        Experience::where('id',$request->id)->update([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'time_start' => $request->time_start,
            'time_finish' => $request->time_finish,
        ]);
        toastr()->success("Sửa kinh nghiệm làm việc thành công");
        return back();
    }

    public function deleteExperience(Request $request)
    {
        Experience::where('id',$request->id)->delete();
        toastr()->success("Xóa kinh nghiệm làm việc thành công");
        return back();
    }
}
