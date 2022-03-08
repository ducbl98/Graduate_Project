<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\Province;
use App\Models\Technique;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homepage()
    {
        $totalUser = User::count();
        $totalSeeker = User::where('role',1)->count();
        $totalRecruiter = User::where('role',2)->count();
        $totalJob = Job::where('is_active',1)->count();
        $totalCategory = Category::count();
        $totalTechnique = Technique::count();
        $totalPlace = Province::count();
        return view('admin-index-2',compact('totalUser','totalSeeker','totalRecruiter','totalJob','totalCategory','totalTechnique','totalPlace'));
    }

    public function index()
    {
        $users = User::where([
            ['role', '!=', 3]
        ])->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function enable($id)
    {
        $user = User::find($id);
        $user->is_active = 1;
        $user->save();
        return redirect()->back();
    }

    public function disable($id)
    {
        $user = User::find($id);
        $user->is_active = 0;
        $user->save();
        return redirect()->back();
    }
}
