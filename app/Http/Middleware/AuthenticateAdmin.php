<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()){
            if(auth()->user()->role == 3){
                return $next($request);
            }
        }
        toastr()->error('Bạn chưa đăng nhập !');
        return redirect()->route('adminLogin');
    }
}
