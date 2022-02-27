<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsVerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (!$user->is_email_verified) {
            auth()->logout();
            toastr()->warning('Bạn cần xác thực tài khoản. Chúng tôi đã gửi link xác thực qua email , Hãy kiểm tra email!');
            if($user->role ==1){
                return redirect()->route('seekerLogin');
            }else {
                return redirect()->route('companyLogin');
            }
        }
        return $next($request);
    }
}
