<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $area=Area::all();
        return view('area.index',['area' => $area]);
        return view('area.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('area.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_area' => 'required|unique:areas'
        ]);

        $area = new Area();
        $area->nombre_area = $request->input('nombre_area');
        $area->save();

        return view("area.message",['msg' => "Registro guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idarea)
    {
        $area = Area::find($idarea);
        return view('area.edit',['area'=>$area]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idarea)
    {
        $request->validate([
            'nombre_area' => 'required|unique:areas'
        ]);

        $area = Area::find($idarea);
        $area->nombre_area = $request->input('nombre_area');
        $area->save();

        return view("area.message",['msg' => "Registro guardado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        //
    }
}
