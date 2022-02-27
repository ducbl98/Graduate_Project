<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\manage\AdminController;
use App\Http\Controllers\manage\CategoryController;
use App\Http\Controllers\manage\CityController;
use App\Http\Controllers\manage\CompanyController;
use App\Http\Controllers\manage\EducationController;
use App\Http\Controllers\manage\ExperienceController;
use App\Http\Controllers\manage\PostController;
use App\Http\Controllers\manage\SeekerController;
use App\Http\Controllers\manage\SkillController;
use App\Http\Controllers\manage\TechniqueController;
use App\Http\Controllers\manage\TechniqueTypeController;
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

Route::get('admin-login', [AuthController::class, 'adminLogin'])->name('adminLogin');
Route::post('admin-login', [AuthController::class, 'adminLoginProcess'])->name('adminLoginProcess');


Route::get('seeker-login', [AuthController::class, 'seekerLogin'])->name('seekerLogin');
Route::get('company-login', [AuthController::class, 'companyLogin'])->name('companyLogin');
Route::post('seeker-login', [AuthController::class, 'seekerLoginPost'])->name('seekerLoginPost');
Route::post('company-login', [AuthController::class, 'companyLoginPost'])->name('companyLoginPost');
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
Route::get('job/all',[PostController::class,'findAllJobs'])->name('job.all');
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
        Route::get('/change-password',[SeekerController::class,'showChangePassword'])->name('change-password.show');
        Route::post('/change-password',[SeekerController::class,'changePassword'])->name('change-password.post');
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
        Route::post('/job/change-apply',[SeekerController::class,'changeApplyJob'])->name('job.changeApply');
        Route::get('/job-applied/list',[SeekerController::class,'listAppliedJob'])->name('job.apply.list');
        Route::get('/job-applied/detail/{id}',[SeekerController::class,'detailAppliedJob'])->name('job.apply.detail');
        Route::get('/job-applied/delete/{id}',[SeekerController::class,'deleteAppliedJob'])->name('job.apply.delete');
        //Company Response
        Route::get('/company-response/list',[SeekerController::class,'listCompanyResponses'])->name('company.response.list');
        Route::get('/company-response/detail/{id?}',[SeekerController::class,'detailCompanyResponse'])->name('company.response.detail');
        Route::get('/company-response/download/{id}',[SeekerController::class, 'downloadAttachmentCompany'])->name('company.response.downloadAttachment');
        //Save Jobs
        Route::get('/save-jobs/list',[SeekerController::class,'listSavedJobs'])->name('job.save.list');
        Route::get('/save-jobs/{id}',[SeekerController::class,'saveJobs'])->name('job.save');
        Route::get('/un-save-jobs/{id}',[SeekerController::class,'unSaveJobs'])->name('job.unSave');
    });

Route::namespace('Company')
    ->name('company.')
    ->prefix('company')
    ->middleware('auth')
    ->group(function () {
        Route::get('/profile',[CompanyController::class,'showProfile'])->name('profile.show');
        Route::post('/profile/update-profile',[CompanyController::class,'updateProfile'])->name('profile.updateProfile');
        Route::get('/change-password',[CompanyController::class,'showChangePassword'])->name('change-password.show');
        Route::post('/change-password',[CompanyController::class,'changePassword'])->name('change-password.post');
        //Post
        Route::get('/post/list',[PostController::class,'listPost'])->name('post.list');
        Route::get('/post/create',[PostController::class,'createPost'])->name('post.create');
        Route::get('/post/{id}/edit',[PostController::class,'editPost'])->name('post.edit');
        Route::post('/post/store',[PostController::class,'storePost'])->name('post.store');
        Route::post('/post/{id}/update',[PostController::class,'updatePost'])->name('post.update');
        Route::get('/post/{id}/delete',[PostController::class,'deletePost'])->name('post.delete');
        Route::get('/post/search',[PostController::class, 'companySearchPost'])->name('post.search');
        //Candidate
        Route::get('/candidate/list',[CompanyController::class,'listCandidates'])->name('candidate.list');
        Route::get('/candidate/detail/{id}',[CompanyController::class,'detailCandidate'])->name('candidate.detail');
        Route::post('/candidate/reply',[CompanyController::class,'replyCandidate'])->name('candidate.reply');
        Route::get('/candidate/dismiss/{id}',[CompanyController::class,'dismissCandidate'])->name('candidate.dismiss');
        Route::get('/candidate/download/{id}',[CompanyController::class,'downloadCandidateCV'])->name('candidate.downloadCV');
    });
//Route::get('/admin', function () {
//    return view('admin-index-2');
//});

Route::namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->middleware('authAdmin')
    ->group(function () {
        Route::get('/',[AdminController::class,'homepage'])->name('homepage');
        //Category
        Route::get('/category/index',[CategoryController::class,'index'])->name('category.index');
        Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
        Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
        Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('/category/update',[CategoryController::class,'update'])->name('category.update');
        //City
        Route::get('/city/index',[CityController::class,'index'])->name('city.index');
        Route::get('/city/create',[CityController::class,'create'])->name('city.create');
        Route::post('/city/store',[CityController::class,'store'])->name('city.store');
        Route::get('/city/edit/{id}',[CityController::class,'edit'])->name('city.edit');
        Route::post('/city/update',[CityController::class,'update'])->name('city.update');
        //Technique
        Route::get('/technique/index',[TechniqueController::class,'index'])->name('technique.index');
        Route::get('/technique/create',[TechniqueController::class,'create'])->name('technique.create');
        Route::post('/technique/store',[TechniqueController::class,'store'])->name('technique.store');
        Route::get('/technique/edit/{id}',[TechniqueController::class,'edit'])->name('technique.edit');
        Route::post('/technique/update',[TechniqueController::class,'update'])->name('technique.update');
        //TechniqueType
        Route::get('/technique-type/index',[TechniqueTypeController::class,'index'])->name('technique-type.index');
        Route::get('/technique-type/create',[TechniqueTypeController::class,'create'])->name('technique-type.create');
        Route::post('/technique-type/store',[TechniqueTypeController::class,'store'])->name('technique-type.store');
        Route::get('/technique-type/edit/{id}',[TechniqueTypeController::class,'edit'])->name('technique-type.edit');
        Route::post('/technique-type/update',[TechniqueTypeController::class,'update'])->name('technique-type.update');
        //User
        Route::get('/user/index',[AdminController::class,'index'])->name('user.index');
        Route::get('/user/{id}/enable',[AdminController::class,'enable'])->name('user.enable');
        Route::get('/user/{id}/disable',[AdminController::class,'disable'])->name('user.disable');
    });
