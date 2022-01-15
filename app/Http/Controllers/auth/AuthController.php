<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SeekerRegisterRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Province;
use App\Models\Seeker;
use App\Models\TechniqueType;
use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $isSeeker = $user && $user->role == 1;
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->where('is_active', 1)->orderBy('created_at', 'desc')->get();
        $techniqueTypes = TechniqueType::with('techniques')->get();
        $provinces = Province::all();
//        $categories = Category::with('jobs.user')->withCount('jobs')
//            ->whereRelation('jobs.user','users.is_active','=',1)
//            ->whereRelation('jobs', 'jobs.is_active', '=', 1)
//            ->orderBy('jobs_count', 'desc')
//            ->get();
        $categories = Category::with('jobs.user')
            ->withCount(['jobs' => function (Builder $query) {
                $query->join('users', 'jobs.created_by', '=', 'users.id');
                $query->where('users.is_active', '=', 1);
            }])
            ->whereRelation('jobs.user', 'users.is_active', '=', 1)
            ->whereRelation('jobs', 'jobs.is_active', '=', 1)
            ->orderBy('jobs_count', 'desc')
            ->get();
//        dd($categories);
        return view('welcome', compact('isSeeker', 'jobs', 'techniqueTypes', 'provinces', 'categories'));
    }

    public function indexCompany()
    {
        $user = Auth::user();
        $isCompany = $user && $user->role == 2;
        return view('company-index', compact('isCompany'));
    }

    public function showSeekerRegister()
    {
        return view('auth.register-employees');
    }

    public function showCompanyRegister()
    {
        return view('auth.register-employers');
    }

    public function seekerRegister(SeekerRegisterRequest $request): RedirectResponse
    {
        $user = User::create(array_merge(
            $request->all(),
            [
                'password' => Hash::make($request->password),
                'role' => 1,
            ]
        ));

        $seeker = Seeker::create([
            'phone_number' => $request->phone_number,
            'user_id' => $user->id,
        ]);

        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->id,
            'token' => $token
        ]);
        Mail::send('email.email-verification-email', ['token' => $token], function ($message) use ($request) {
            $message->from(env('MAIL_USERNAME'));
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });

        toastr()->success('Great! Register Successfully !')
            ->info('We have send email confirmation to your email . Please check your email');
        return redirect()->route('seekerLogin');
    }

    public function companyRegister(CompanyRegisterRequest $request)
    {
        $user = User::create(array_merge(
            $request->all(),
            [
                'password' => Hash::make($request->password),
                'role' => 2,
            ]
        ));

        $company = Company::create([
            'phone_number' => $request->phone_number,
            'contact_name' => $request->contact_name,
            'address' => $request->address,
            'user_id' => $user->id,
        ]);

        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->id,
            'token' => $token
        ]);
        Mail::send('email.email-verification-email', ['token' => $token], function ($message) use ($request) {
            $message->from(env('MAIL_USERNAME'));
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });

        toastr()->success('Great! Register Successfully !')
            ->info('We have send email confirmation to your email . Please check your email');
        return redirect()->route('companyLogin');

    }

    public function adminLogin()
    {
        return view('auth.login-admin');
    }

    public function adminLoginProcess(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $userRole = Auth::user()->role;
            if ($userRole == 3) {
                toastr()->success('Bạn đã đăng nhập thành công !');
                return redirect()->route('admin.homepage');
            } else {
                toastr()->error('Sai thông tin đăng nhập !');
                return back();
            }
        }
        toastr()->error('Sai thông tin đăng nhập !');
        return back();
    }

    public function seekerLogin()
    {
        if (!session()->has('url.intended')) {
            session(['url.intended' => url()->previous()]);
        }
        return view('auth.login-employees');
    }

    public function companyLogin()
    {
        return view('auth.login-employers');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $userRole = Auth::user()->role;
            $isActive = Auth::user()->is_active;
            if (!$isActive) {
                toastr()->error('Tài khoản đã bị vô hiệu hóa !');
                return back();
            }
            switch ($userRole) {
                case 1 :
                    toastr()->success('Bạn đã đăng nhập thành công !');
                    return redirect()->intended();
                case 2 :
                    toastr()->success('Bạn đã đăng nhập thành công !');
                    return redirect()->route('companyPage');
                case 3:
                    toastr()->error('Sai thông tin đăng nhập !');
                    return back();
            }
        }
        toastr()->error('Sai thông tin đăng nhập !');
        return back();
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Auth::logout();

        return redirect()->route('homePage');
    }

    public function verifyAccount($token): RedirectResponse
    {
        $verifyUser = UserVerify::where('token', $token)->first();
        $userRole = $verifyUser->user->role;
        $redirect = $userRole == 1 ? 'seekerLogin' : 'companyLogin';
        $message = 'Sorry your email cannot be identified.';

        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->email_verified_at = Carbon::now();
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
        toastr()->info($message);
        return redirect()->route($redirect);
    }
}
