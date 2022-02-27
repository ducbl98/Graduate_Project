<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Province;
use App\Models\SavedJob;
use App\Models\Seeker;
use App\Models\SeekerApplication;
use App\Models\Technique;
use App\Models\TechniqueType;
use App\Models\User;
use App\Rules\EqualArray;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Pagination;
use Illuminate\Support\Facades\Session;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function listPost()
    {
        $search='';
        $companyId = Auth::id();
        $companyProfile = User::with('company', 'jobs')->find($companyId);
        $job_titles = Job::query()->distinct()->pluck('title');
//        dd($job_titles);
//        $company = Company::with('user')->where('user_id',Auth::id())->first();
        $totalJobs = Job::where('created_by','=',Auth::id())->count();
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->where('created_by', Auth::id())->where('is_active', 1)
            ->orderBy('updated_at','DESC')
            ->paginate(5);
        $isSearch = false;
        return view('company.job-list', compact('jobs', 'isSearch', 'job_titles', 'companyProfile','totalJobs','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function createPost()
    {
        $categories = Category::all();
        $companyId = Auth::id();
        $companyProfile = User::with('company', 'jobs')->find($companyId);
        $provinces = Province::all();
        $techniqueTypes = TechniqueType::with('techniques')->get();
        return view('company.job-create', compact('categories', 'techniqueTypes', 'provinces', 'companyProfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostRequest $request
     * @return RedirectResponse
     */
    public function storePost(CreatePostRequest $request): RedirectResponse
    {

        $request->validate([
            "technique_type_option" => [new EqualArray($request, ["technique_type_option", "optional_technique"])],
        ]);
        $company = Company::with('user')->where('user_id', Auth::id())->first();
//        dd($company);
//        dd($request);
        $post_categories = $request->categories ? array_map('intval', $request->categories) : [];
        $post_techniques = $request->techniques ? array_map('intval', $request->techniques) : [];
//        dd($post_techniques);
//        dd($post_categories);
        if ($request->optional_category) {
            foreach ($request->optional_category as $optional_category) {
                $category = Category::updateOrCreate([
                    'name' => $optional_category
                ]);
                $post_categories[] = $category->id;
            }
        }
//        dd($post_categories);
        if ($request->optional_technique) {
            $techniqueArrays = array_map(null, $request->technique_type_option, $request->optional_technique);
//            dd($techniqueArrays);
            foreach ($techniqueArrays as $techniqueArray) {
                $technique = Technique::updateOrCreate([
                    'name' => $techniqueArray[1],
                    'type_id' => (int)$techniqueArray[0],
                ]);
                $post_techniques[] = $technique->id;
            }
        }
//        dd($post_techniques);

        try {
            $job = Job::create([
                'title' => $request->title,
                'application_email' => $request->application_email,
                'image' => $company->avatar_url ?? 'img/job-default.png',
                'amount' => $request->amount,
                'work_time' => $request->work_time,
                'experience' => $request->experience,
                'salary_min' => $request->salary_min,
                'salary_max' => $request->salary_max,
                'salary_unit' => $request->salary_unit,
                'address' => $request->address,
                'expire' => $request->expire,
                'details' => $request->details,
                'province_id' => $request->province_id,
                'created_by' => Auth::id(),
            ]);

            $job->categories()->sync($post_categories);
            $job->techniques()->sync($post_techniques);

        } catch (Exception $e) {
            dd($e);
        }
        toastr()->success('Tạo tin tuyển dụng thành công !');
        return redirect()->route('company.post.list');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function showPost(int $id)
    {
        $user = Auth::user();
        $isSeeker = $user && $user->role == 1;
        $isSaveJob = false;
        $seekerProfile = User::with('seeker')->find(Auth::id());
        $seeker = Seeker::with('user')->where('user_id', Auth::id())->first();
        $isApplied = false;
        $job = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->find($id);
        if ($user) {
            $seekerApplication = SeekerApplication::where([
                ['user_id', '=', $user->id],
                ['job_id', '=', $id]
            ])->first();
            if ($seekerApplication) {
                $isApplied = true;
            }
            $userSaveJob = SavedJob::where([
                ['user_id', '=', Auth::id()],
                ['job_id', '=', $id]
            ])->first();
            if ($userSaveJob) {
                $isSaveJob = true;
            }
        }
//        dd(Carbon::createFromFormat('Y-m-d',$job->expire)> Carbon::now());
//        dd($isApplied,$isSeeker);
//        dd($job);
        return view('guest-seeker.job-detail', compact('job', 'seeker', 'isSeeker', 'isApplied', 'seekerProfile','isSaveJob'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function editPost(int $id)
    {
        $companyId = Auth::id();
        $companyProfile = User::with('company', 'jobs')->find($companyId);
        $jobCategoryIds = [];
        $jobTechniqueIds = [];
        $job = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->find($id);
//        dd($job);
        $categories = Category::all();
        $provinces = Province::all();
        $techniqueTypes = TechniqueType::with('techniques')->get();
        foreach ($job->categories as $category) {
            $jobCategoryIds[] = $category->id;
        }
        foreach ($job->techniques as $technique) {
            $jobTechniqueIds[] = $technique->id;
        }
//        dd($jobCategoryIds,$jobTechniqueIds);
        return view('company.job-edit', compact('job', 'categories', 'techniqueTypes', 'provinces',
            'jobTechniqueIds', 'jobCategoryIds', 'companyProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditPostRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function updatePost(EditPostRequest $request, int $id): RedirectResponse
    {
//        dd($request);
        $request->validate([
            "technique_type_option" => [new EqualArray($request, ["technique_type_option", "optional_technique"])],
        ]);
//        dd($company);
//        dd($request);
        $post_categories = array_map('intval', $request->categories);
        $post_techniques = array_map('intval', $request->techniques);
//        dd($post_techniques);
//        dd($post_categories);
        if ($request->optional_category) {
            foreach ($request->optional_category as $optional_category) {
                $category = Category::updateOrCreate([
                    'name' => $optional_category
                ]);
                $post_categories[] = $category->id;
            }
        }
//        dd($post_categories);
        if ($request->optional_technique) {
            $techniqueArrays = array_map(null, $request->technique_type_option, $request->optional_technique);
            foreach ($techniqueArrays as $techniqueArray) {
                $technique = Technique::updateOrCreate([
                    'name' => $techniqueArray[1],
                    'type_id' => (int)$techniqueArray[0],
                ]);
                $post_techniques[] = $technique->id;
            }
        }
//        dd($post_techniques);

        try {
            $job = Job::where('id', $id)->first();
            $job->update([
                'title' => $request->title,
                'application_email' => $request->application_email,
                'amount' => $request->amount,
                'work_time' => $request->work_time,
                'experience' => $request->experience,
                'salary_min' => $request->salary_min,
                'salary_max' => $request->salary_max,
                'salary_unit' => $request->salary_unit,
                'address' => $request->address,
                'expire' => $request->expire,
                'details' => $request->details,
                'province_id' => $request->province_id,
            ]);

            $job->categories()->sync($post_categories);
            $job->techniques()->sync($post_techniques);

        } catch (Exception $e) {
            dd($e);
        }
        toastr()->success('Sửa tin tuyển dụng thành công !');
        return redirect()->route('company.post.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function deletePost(int $id): RedirectResponse
    {
        $job = Job::where('id', $id)->first();
        $job->is_active = 0;
        $job->save();

        return redirect()->route('company.post.list');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function companySearchPost(Request $request)
    {
//        dd($request);
        $search = $request->get('keyword');
        $job_titles = Job::query()->distinct()->pluck('title');
        $totalJobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->where([
                ['created_by', '=', Auth::id()],
                ['is_active', '=', 1],
                ['title', 'LIKE', '%' . $request->keyword . '%']
            ])->count();
        $companyProfile = User::with('company', 'jobs')->find(Auth::id());
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->where([
                ['created_by', '=', Auth::id()],
                ['is_active', '=', 1],
                ['title', 'LIKE', '%' . $request->keyword . '%']
            ])
            ->orderBy('updated_at','DESC')
            ->paginate(5);
        $isSearch = true;
//        dd($jobs);
        return view('company.job-list', compact('jobs', 'isSearch', 'job_titles','companyProfile','search','totalJobs'));
    }

    public function findAllJobs()
    {
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->where('is_active', 1)
            ->whereDate('expire','>=',Carbon::today())
            ->orderBy('updated_at','DESC')
            ->get();
        session()->forget('jobs');
        session()->put('jobs', $jobs);
        return redirect()->route('job.listAllJobAndSearch');
    }

    function searchPost(Request $request)
    {
        $paramSearch = 'empty&&empty&&empty';
        $title = $request->keyword ? '%' . $request->keyword . '%' : '';
        $existTitle = $request->keyword;
        $existTechnique = $request->technique;
        $existProvince = $request->province;
//        dd($existTitle,$existTechnique,$existProvince);
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->where('is_active', 1)
            ->whereDate('expire','>=',Carbon::today())
            ->orderBy('updated_at','DESC')
            ->get();
        $jobSearchTitle = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->where([
                ['is_active', '=', 1],
                ['title', 'LIKE', $title]
            ])
            ->orderBy('updated_at','DESC')
            ->get();
        $jobSearchTechnique = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->whereRelation('techniques', 'techniques.id', '=', $request->technique)
            ->where('is_active', 1)
            ->whereDate('expire','>=',Carbon::today())
            ->orderBy('updated_at','DESC')
            ->get();
        $jobSearchProvince = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->whereRelation('province', 'provinces.id', '=', $request->province)
            ->where('is_active', 1)
            ->whereDate('expire','>=',Carbon::today())
            ->orderBy('updated_at','DESC')
            ->get();
        if (!$existProvince) {
            if (!$existTechnique) {
                if ($existTitle) {
                    $jobs = $jobs->intersect($jobSearchTitle);
                    $paramSearch = implode('&&', [$existTitle, 'empty', 'empty']);
                }
            } else {
                if ($existTitle) {
                    $jobs = $jobs->intersect($jobSearchTitle)->intersect($jobSearchTechnique);
                    $paramSearch = implode('&&', [$existTitle, $existTechnique, 'empty']);
                } else {
                    $jobs = $jobs->intersect($jobSearchTechnique);
                    $paramSearch = implode('&&', ['empty', $existTechnique, 'empty']);
                }
            }
        } else {
            if (!$existTechnique) {
                if ($existTitle) {
                    $jobs = $jobs->intersect($jobSearchTitle)->intersect($jobSearchProvince);
                    $paramSearch = implode('&&', [$existTitle, 'empty', $existProvince]);
                } else {
                    $jobs = $jobs->intersect($jobSearchProvince);
                    $paramSearch = implode('&&', ['empty', 'empty', $existProvince]);
                }
            } else {
                if ($existTitle) {
                    $jobs = $jobs->intersect($jobSearchTitle)->intersect($jobSearchTechnique)->intersect($jobSearchProvince);
                    $paramSearch = implode('&&', [$existTitle, $existTechnique, $existProvince]);
                } else {
                    $jobs = $jobs->intersect($jobSearchTechnique)->intersect($jobSearchProvince);
                    $paramSearch = implode('&&', ['empty', $existTechnique, $existProvince]);
                }
            }
        }
        session()->forget('jobs');
        session()->put('jobs', $jobs);
        return redirect()->route('job.listAllJobAndSearch', ['categoryId' => $paramSearch, 'type' => 'common']);
//        dd($jobs);
//        dd($request,$jobs,$jobSearchTitle,$jobSearchTechnique,$jobSearchProvince);
    }

    public
    function searchPostBySalary(Request $request)
    {
//        dd($request);
        $salary_range = explode(';', $request->salary_range);
        $salary_unit = $request->salary_unit;
        if ($salary_unit === 'Triệu VND') {
            $salary_range = array_map(function ($salary) {
                return (int)$salary * 1000000;
            }, $salary_range);
        } else {
            $salary_range = array_map(function ($salary) {
                return (int)$salary;
            }, $salary_range);
        }

//        dd($salary_range,$salary_unit);
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->where([
                ['is_active', '=', 1],
                ['salary_unit', '=', $salary_unit],
                ['salary_min', '>=', $salary_range[0]],
                ['salary_max', '<=', $salary_range[1]]
            ])
            ->whereDate('expire','>=',Carbon::today())
            ->orderBy('updated_at','DESC')
            ->get();
//        dd($jobs);
        session()->forget('jobs');
        session()->put('jobs', $jobs);
        return redirect()->route('job.listAllJobAndSearch');
//        return redirect()->route('job.listAllJobAndSearch');
////        dd($jobs);
////        dd($request,$jobs,$jobSearchTitle,$jobSearchTechnique,$jobSearchProvince);
    }

    public
    function searchPostByCategory($categoryId): RedirectResponse
    {
//        dd($categoryId);
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->whereRelation('categories', 'categories.id', '=', $categoryId)
            ->where('is_active', 1)
            ->whereDate('expire','>=',Carbon::today())
            ->orderBy('updated_at','DESC')
            ->get();
//        dd($jobs);
        session()->forget('jobs');
        session()->put('jobs', $jobs);
        return redirect()->route('job.listAllJobAndSearch', ['categoryId' => $categoryId, 'type' => 'category']);
//        return redirect()->route('job.listAllJobAndSearch',['jobs' => $jobs]);
//        $jobs =Pagination::paginate($jobs,1);
//        return view('guest-seeker.job-search-and-list',compact('jobs', 'techniqueTypes','provinces','categories','totalJobs','categoryId'));
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public
    function listAllJobAndSearch(Request $request)
    {
//        dd($categoryId);
//        dd($request->route('categoryId'));
        $user = Auth::user();
        $isSeeker = $user && $user->role == 1;
        $seekerProfile = User::with('seeker')->find(Auth::id());
        $categoryId = $request->route('categoryId');
        $type = $request->route('type');
        $jobs = session()->get('jobs');
        session()->forget('jobs');
        session()->put('jobs', $jobs);
//        dd($jobs,session()->get('jobs'));
        $totalSearchJobs = count($jobs);
        $jobs = Pagination::paginate($jobs, 5, null, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        $existTitle = $existTechnique = $existProvince = null;
        if ($type === 'common') {
            $explode = explode('&&', $categoryId);
            $existTitle = $explode[0] === 'empty' ? '' : $explode[0];
            $existTechnique = $explode[1] === 'empty' ? 0 : $explode[1];
            $existProvince = $explode[2] === 'empty' ? 0 : $explode[2];
        }
//        dd($existTitle,$existTechnique,$existProvince);
        $techniqueTypes = TechniqueType::with('techniques')->get();
        $provinces = Province::all();
        $totalJobs = Job::where('is_active', 1)
            ->whereDate('expire','>=',Carbon::today())
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->count();
//        $categories = Category::withCount('jobs')->orderBy('jobs_count', 'desc')->get();
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
        return view('guest-seeker.job-search-and-list', compact('jobs', 'techniqueTypes', 'provinces', 'categories',
            'totalJobs', 'categoryId', 'totalSearchJobs', 'type', 'existTitle', 'existTechnique', 'existProvince', 'isSeeker', 'seekerProfile'));

    }

    function searchPostByCompany(Request $request)
    {
        $jobs = Job::with('province', 'techniques.techniqueType', 'categories', 'user.company')
            ->whereRelation('user', 'users.is_active', '=', 1)
            ->whereRelation('user', 'name', 'LIKE', '%' . $request->company_name . '%')
            ->where('is_active', 1)
            ->orderBy('updated_at','DESC')
            ->get();

        session()->forget('jobs');
        session()->put('jobs', $jobs);
        return redirect()->route('job.listAllJobAndSearch', ['categoryId' => $request->company_name, 'type' => 'company']);

    }
}
