<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Technique;
use App\Models\TechniqueType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TechniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $techniques = Technique::with('techniqueType')->orderBy('id','desc')->paginate(10);
        return view('admin.technique.index',compact('techniques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $techniqueTypes = TechniqueType::all();
        return view('admin.technique.create',compact('techniqueTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'technique'=>'required|string|unique_technique_and_type:'.$request->techniqueType,
            'techniqueType'=>'required|numeric'
        ],[
            'required' => 'Không được để trống trường này',
            'string' => 'Yêu cầu kiểu chuỗi',
            'unique_technique_and_type' => 'Giá trị này đã tồn tại',
        ]);
        Technique::updateOrCreate([
            'name' => $request->technique,
            'type_id'=>$request->techniqueType,
        ]);
        return redirect()->route('admin.technique.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $techniqueTypes = TechniqueType::all();
        $technique = Technique::with('techniqueType')->find($id);
        return view('admin.technique.edit',compact('technique','techniqueTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'technique'=>'required|string|unique_technique_and_type_update:'.$request->techniqueType.','.$request->id,
            'techniqueType'=>'required|numeric'
        ],[
            'required' => 'Không được để trống trường này',
            'string' => 'Yêu cầu kiểu chuỗi',
            'unique_technique_and_type_update' => 'Giá trị này đã tồn tại',
        ]);
        $technique = Technique::find($request->id);
        $technique->name = $request->technique;
        $technique->type_id = $request->techniqueType;
        $technique->save();
        return redirect()->route('admin.technique.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
