<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('auth.forget-password');
    }

    public function submitForgetPasswordForm(ForgetPasswordRequest $request): RedirectResponse
    {
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forget-password', ['token' => $token], function($message) use($request){
            $message->from(env('MAIL_USERNAME'));
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        toastr()->info('Link đặt lại mật khẩu đã được gửi lại qua email đã nhập!');
        return redirect()->route('seekerLogin');
    }

    public function showResetPasswordForm($token) {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function submitResetPasswordForm(ResetPasswordRequest $request): RedirectResponse
    {
        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();
        $user = User::select('role')->where('email', $request->email)->first();
        $redirect = $user->role == 1 ? 'seekerLogin' : 'companyLogin';

        if(!$updatePassword){
            toastr()->error('Invalid token!');
            return back();
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        toastr()->success('Mật khẩu của bạn đã được đặt lại!');
        return redirect()->route($redirect);
    }
}
