<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Technique;
use App\Models\TechniqueType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
