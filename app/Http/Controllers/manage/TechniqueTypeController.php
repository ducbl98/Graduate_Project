<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\TechniqueType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TechniqueTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $techniqueTypes = TechniqueType::orderBy('id','desc')->paginate(10);
        return view('admin.technique-type.index',compact('techniqueTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.technique-type.create');
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
            'techniqueType'=>'required|string|unique:technique_types,name'
        ],[
            'required' => 'Không được để trống trường này',
            'string' => 'Yêu cầu kiểu chuỗi',
            'unique' => 'Giá trị này đã tồn tại',
        ]);
        TechniqueType::updateOrCreate([
            'name' => $request->techniqueType,
        ]);
        return redirect()->route('admin.technique-type.index');
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
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $techniqueType = TechniqueType::find($id);
        return view('admin.technique-type.edit',compact('techniqueType'));
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
            'techniqueType'=>'required|string|unique:technique_types,name,'.$request->id,
        ],[
            'required' => 'Không được để trống trường này',
            'string' => 'Yêu cầu kiểu chuỗi',
            'unique' => 'Giá trị này đã tồn tại'
        ]);
//        dd($request->id);
        $techniqueType = TechniqueType::find($request->id);
        $techniqueType->name = $request->techniqueType;
        $techniqueType->save();
        return redirect()->route('admin.technique-type.index');
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
