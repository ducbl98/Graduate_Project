<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\manage\SeekerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('homePage');
});
Route::get('dashboard', [AuthController::class, 'index'])->name('homePage');
Route::get('company-dashboard', [AuthController::class, 'indexCompany'])->name('companyPage');

Route::get('seeker-login', [AuthController::class, 'seekerLogin'])->name('seekerLogin');
Route::get('company-login', [AuthController::class, 'companyLogin'])->name('companyLogin');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('seeker-register', [AuthController::class, 'showSeekerRegister'])->name('showSeekerRegister');
Route::get('company-register', [AuthController::class, 'showCompanyRegister'])->name('showCompanyRegister');
Route::post('seeker-register', [AuthController::class, 'seekerRegister'])->name('seekerRegister');
Route::post('company-register', [AuthController::class, 'companyRegister'])->name('companyRegister');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('showForgetPassword');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgetPassword');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('showResetPassword');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('resetPassword');

Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify');

Route::namespace('Seeker')
    ->name('seeker.')
    ->prefix('seeker')
    ->middleware('auth')
    ->group(function () {
        Route::get('/profile',[SeekerController::class,'showProfile'])->name('profile.show');
        Route::post('/profile/update-avatar',[SeekerController::class,'updateAvatar'])->name('profile.updateAvatar');
    });
