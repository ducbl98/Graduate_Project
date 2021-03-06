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
use App\Models\SeekerApplication;
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
        $seekerProfile = User::with('seeker')->find(Auth::id());
        $isSeeker = $user && $user->role == 1;
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->where('is_active', 1)
            ->whereDate('expire','>=',Carbon::today())
            ->orderBy('created_at', 'DESC')
            ->skip(0)->take(8)->get();
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
                $query->where('jobs.expire', '>=', Carbon::today());
            }])
            ->whereRelation('jobs.user', 'users.is_active', '=', 1)
            ->whereRelation('jobs', 'jobs.is_active', '=', 1)
            ->whereRelation('jobs', 'jobs.expire', '>=', Carbon::today())
            ->orderBy('jobs_count', 'desc')
            ->get();
//        dd($categories);
        return view('welcome', compact('isSeeker', 'jobs', 'techniqueTypes', 'provinces', 'categories','seekerProfile'));
    }

    public function indexCompany()
    {
        $user = Auth::user();
        $companyProfile = User::with('company','jobs','applyApplications')->find(Auth::id());
        $seekerApplicationSeen = SeekerApplication::with('job.user')
            ->whereRelation('job.user','id','=',Auth::id())
            ->where('is_seen','=',1)->count();
//        dd($companyProfile);
        $jobViews = Job::where('created_by','=',Auth::id())->sum('view');
        $newestCandidate = SeekerApplication::with('user.seeker', 'job')
            ->whereRelation('job', 'created_by', '=', Auth::id())
            ->where('is_active', 1)
            ->orderBy('updated_at', 'desc')
            ->first();
        $isCompany = $user && $user->role == 2;
        return view('company-index', compact('isCompany','companyProfile','seekerApplicationSeen','jobViews','newestCandidate'));
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

        toastr()->success('????ng k?? th??nh c??ng !')
            ->info('Ch??ng t??i ???? g???i email x??c th???c t???i email c???a b???n. H??y ki???m tra h??m th??');
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

        toastr()->success('????ng k?? th??nh c??ng !')
            ->info('Ch??ng t??i ???? g???i email x??c th???c t???i email c???a b???n. H??y ki???m tra h??m th??');
        return redirect()->route('companyLogin');

    }

    public function adminLogin()
    {
        return view('auth.login-admin');
    }

    public function adminLoginProcess(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $userRole = Auth::user()->role;
            if ($userRole == 3) {
                toastr()->success('B???n ???? ????ng nh???p th??nh c??ng !');
                return redirect()->route('admin.homepage');
            } else {
                toastr()->error('Sai th??ng tin ????ng nh???p !');
                return back();
            }
        }
        toastr()->error('Sai th??ng tin ????ng nh???p !');
        return back();
    }

    public function seekerLogin()
    {
        if (!session()->has('url.intended')) {
            session(['url.intended' => url()->previous()]);
        }
//        dd(session('url.intended'));
        return view('auth.login-employees');
    }

    public function companyLogin()
    {
        return view('auth.login-employers');
    }

    public function seekerLoginPost(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $userRole = Auth::user()->role;
            $isEmailVerified =Auth::user()->is_email_verified;
            $isActive = Auth::user()->is_active;
            if (!$isEmailVerified){
                toastr()->warning('B???n c???n x??c th???c t??i kho???n. Ch??ng t??i ???? g???i link x??c th???c qua email , H??y ki???m tra email!');
                return back();
            }
            if (!$isActive) {
                toastr()->error('T??i kho???n ???? b??? v?? hi???u h??a !');
                return back();
            }
            if ($userRole == 1) {
                toastr()->success('B???n ???? ????ng nh???p th??nh c??ng !');
                return redirect()->intended();
            } else {
                toastr()->error('Sai th??ng tin ????ng nh???p !');
                return back();
            }
        }
        toastr()->error('Sai th??ng tin ????ng nh???p !');
        return back();
    }

    public function companyLoginPost(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $userRole = Auth::user()->role;
            $isEmailVerified =Auth::user()->is_email_verified;
            $isActive = Auth::user()->is_active;
            if (!$isEmailVerified){
                toastr()->warning('B???n c???n x??c th???c t??i kho???n. Ch??ng t??i ???? g???i link x??c th???c qua email , H??y ki???m tra email!');
                return back();
            }
            if (!$isActive) {
                toastr()->error('T??i kho???n ???? b??? v?? hi???u h??a !');
                return back();
            }
            if ($userRole == 2) {
                toastr()->success('B???n ???? ????ng nh???p th??nh c??ng !');
                return redirect()->route('companyPage');
            } else {
                toastr()->error('Sai th??ng tin ????ng nh???p !');
                return back();
            }
        }
        toastr()->error('Sai th??ng tin ????ng nh???p !');
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
                $message = "Email ???? ???????c x??c th???c. B???n c?? th??? ????ng nh???p ngay !.";
            } else {
                $message = "Email ???? ???????c x??c th???c. B???n c?? th??? ????ng nh???p ngay !.";
            }
        }
        toastr()->info($message);
        return redirect()->route($redirect);
    }
}
