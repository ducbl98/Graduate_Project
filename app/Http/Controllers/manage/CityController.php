<?php

namespace App\Http\Controllers\manage;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $cities = Province::orderBy('id','desc')->paginate(10);
        return view('admin.city.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.city.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'province'=>'required|string|unique:provinces,name'
        ],[
            'required' => 'Không được để trống trường này',
            'string' => 'Yêu cầu kiểu chuỗi',
            'unique' => 'Giá trị này đã tồn tại',
        ]);
        Province::updateOrCreate([
            'name' => $request->province,
        ]);
        return redirect()->route('admin.city.index');
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
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $city = Province::find($id);
        return view('admin.city.edit',compact('city'));
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
            'province'=>'required|string|unique:provinces,name,'.$request->id,
        ],[
            'required' => 'Không được để trống trường này',
            'string' => 'Yêu cầu kiểu chuỗi',
            'unique' => 'Giá trị này đã tồn tại'
        ]);
//        dd($request->id);
        $province = Province::find($request->id);
        $province->name = $request->province;
        $province->save();
        return redirect()->route('admin.city.index');
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
