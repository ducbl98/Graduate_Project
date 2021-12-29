<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Province;
use App\Models\Technique;
use App\Models\TechniqueType;
use App\Rules\EqualArray;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function listPost()
    {
        $job_titles = Job::query()->distinct()->pluck('title');
//        dd($job_titles);
        $company = Company::with('user')->where('user_id',Auth::id())->first();
        $jobs = Job::with('province','techniques.techniqueType','categories','company.user','company.province')
                ->where('created_by',$company->id)->where('is_active',1)->paginate(5);
        $isSearch = false;
//        dd($jobs);
        return view('company.job-list',compact('jobs','isSearch','job_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function createPost()
    {
        $categories = Category::all();
        $provinces = Province::all();
        $techniqueTypes = TechniqueType::with('techniques')->get();
        return view('company.job-create', compact('categories', 'techniqueTypes','provinces'));
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
        $company = Company::with('user')->where('user_id',Auth::id())->first();
//        dd($company);
//        dd($request);
        $post_categories = array_map('intval', $request->categories);
        $post_techniques = array_map('intval', $request->techniques);
//        dd($post_techniques);
//        dd($post_categories);
        if($request->optional_category){
            foreach ($request->optional_category as $optional_category){
                $category=Category::updateOrCreate([
                   'name' => $optional_category
                ]);
                $post_categories[] = $category->id;
            }
        }
//        dd($post_categories);
        if ($request->optional_technique){
            $techniqueArrays = array_map(null,$request->technique_type_option, $request->optional_technique);
            foreach ($techniqueArrays as $techniqueArray){
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
                'image' => $company->avatar_url,
                'amount' => $request->amount,
                'work_time' => $request->work_time,
                'experience'=> $request->experience,
                'salary_min' => $request->salary_min,
                'salary_max' => $request->salary_max,
                'salary_unit' => $request->salary_unit,
                'address' => $request->address,
                'expire' => $request->expire,
                'details' => $request->details,
                'province_id' => $request->province_id,
                'created_by' => $company->id,
            ]);

            $job->categories()->sync($post_categories);
            $job->techniques()->sync($post_techniques);

        } catch (Exception $e){
            dd($e);
        }

        return redirect()->route('company.post.list');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function showPost($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function editPost(int $id)
    {
        $jobCategoryIds = [];
        $jobTechniqueIds = [];
        $job = Job::with('province','techniques.techniqueType','categories','company.user','company.province')
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
        return view('company.job-edit',compact('job','categories', 'techniqueTypes','provinces',
            'jobTechniqueIds','jobCategoryIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditPostRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function updatePost(EditPostRequest $request, $id)
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
        if($request->optional_category){
            foreach ($request->optional_category as $optional_category){
                $category=Category::updateOrCreate([
                    'name' => $optional_category
                ]);
                $post_categories[] = $category->id;
            }
        }
//        dd($post_categories);
        if ($request->optional_technique){
            $techniqueArrays = array_map(null,$request->technique_type_option, $request->optional_technique);
            foreach ($techniqueArrays as $techniqueArray){
                $technique = Technique::updateOrCreate([
                    'name' => $techniqueArray[1],
                    'type_id' => (int)$techniqueArray[0],
                ]);
                $post_techniques[] = $technique->id;
            }
        }
//        dd($post_techniques);

        try {
            $job = Job::where('id',$id)->first();
            $job->update([
                'title' => $request->title,
                'application_email' => $request->application_email,
                'amount' => $request->amount,
                'work_time' => $request->work_time,
                'experience'=> $request->experience,
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

        } catch (Exception $e){
            dd($e);
        }

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
        $job = Job::where('id',$id)->first();
        $job->is_active =0;
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
        $company = Company::with('user')->where('user_id',Auth::id())->first();
        $jobs = Job::with('province','techniques.techniqueType','categories','company.user','company.province')
            ->where([
                ['created_by', '=', $company->id],
                ['is_active', '=', 1],
                ['title', 'LIKE', '%' . $request->keyword . '%']
            ])
            ->paginate(5);
        $isSearch = true;
//        dd($jobs);
        return view('company.job-list',compact('jobs','isSearch'));
    }

    public function searchPost(Request $request){
        dd($request);
    }

}
