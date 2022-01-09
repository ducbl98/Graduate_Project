<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homepage()
    {
        return view('admin-index-2');
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
