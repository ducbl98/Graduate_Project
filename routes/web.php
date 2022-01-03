<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\manage\CompanyController;
use App\Http\Controllers\manage\EducationController;
use App\Http\Controllers\manage\ExperienceController;
use App\Http\Controllers\manage\PostController;
use App\Http\Controllers\manage\SeekerController;
use App\Http\Controllers\manage\SkillController;
use App\Models\Experience;
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

Route::get('job/list-all-job-and-search/{categoryId?}/{type?}',[PostController::class,'listAllJobAndSearch'])->name('job.listAllJobAndSearch');
Route::post('job/search',[PostController::class,'searchPost'])->name('job.search');
Route::post('job/search-by-company',[PostController::class,'searchPostByCompany'])->name('job.searchByCompany');
Route::post('job/search-by-salary',[PostController::class,'searchPostBySalary'])->name('job.searchBySalary');
Route::get('job/search-by-category/{categoryId}',[PostController::class,'searchPostByCategory'])->name('job.searchByCategory');
Route::get('job/detail/{jobId}',[PostController::class,'showPost'])->name('job.showPost');

Route::namespace('Seeker')
    ->name('seeker.')
    ->prefix('seeker')
    ->middleware('auth')
    ->group(function () {
        Route::get('/profile',[SeekerController::class,'showProfile'])->name('profile.show');
        Route::post('/profile/update-avatar',[SeekerController::class,'updateAvatar'])->name('profile.updateAvatar');
        Route::post('/profile/update-profile',[SeekerController::class,'updateProfile'])->name('profile.updateProfile');
        //Experience
        Route::post('/experience/add',[ExperienceController::class,'addExperience'])->name('experience.add');
        Route::post('/experience/edit',[ExperienceController::class,'editExperience'])->name('experience.edit');
        Route::get('/experience/delete',[ExperienceController::class,'deleteExperience'])->name('experience.delete');
        //Skill
        Route::post('/skill/add',[SkillController::class,'addSkill'])->name('skill.add');
        Route::post('/skill/edit',[SkillController::class,'editSkill'])->name('skill.edit');
        Route::get('/skill/delete',[SkillController::class,'deleteSkill'])->name('skill.delete');
        //Education
        Route::post('/education/add',[EducationController::class,'addEducation'])->name('education.add');
        Route::post('/education/edit',[EducationController::class,'editEducation'])->name('education.edit');
        Route::get('/education/delete',[EducationController::class,'deleteEducation'])->name('education.delete');
        //Apply Job
        Route::post('/job/apply',[SeekerController::class,'applyJob'])->name('job.apply');
        Route::get('/job-applied/list',[SeekerController::class,'listAppliedJob'])->name('job.apply.list');
        Route::get('/job-applied/detail/{id}',[SeekerController::class,'detailAppliedJob'])->name('job.apply.detail');
        Route::get('/job-applied/delete/{id}',[SeekerController::class,'deleteAppliedJob'])->name('job.apply.delete');
    });

Route::namespace('Company')
    ->name('company.')
    ->prefix('company')
    ->middleware('auth')
    ->group(function () {
        Route::get('/profile',[CompanyController::class,'showProfile'])->name('profile.show');
        Route::post('/profile/update-profile',[CompanyController::class,'updateProfile'])->name('profile.updateProfile');
        //Post
        Route::get('/post/list',[PostController::class,'listPost'])->name('post.list');
        Route::get('/post/create',[PostController::class,'createPost'])->name('post.create');
        Route::get('/post/{id}/edit',[PostController::class,'editPost'])->name('post.edit');
        Route::post('/post/store',[PostController::class,'storePost'])->name('post.store');
        Route::post('/post/{id}/update',[PostController::class,'updatePost'])->name('post.update');
        Route::get('/post/{id}/delete',[PostController::class,'deletePost'])->name('post.delete');
        Route::post('/post/search',[PostController::class, 'companySearchPost'])->name('post.search');
    });
