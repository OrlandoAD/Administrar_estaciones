<?php

namespace App\Http\Controllers;

use App\Estaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['estaciones'] = Estaciones::paginate(10);
        return view('estaciones.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estaciones.create');
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
        //$datosEstaciones = request()->all();

        $datosEstaciones = request()->except('_token');
        Estaciones::insert($datosEstaciones);
        return response()->json($datosEstaciones);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estaciones  $estaciones
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $estaciones = Estaciones::find($id);

        return view('estaciones.show', compact('estaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estaciones  $estaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Estaciones $estaciones)
    {
        //
        return view('estaciones.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estaciones  $estaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estaciones $estaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estaciones  $estaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estaciones $estaciones)
    {
        //
    }
}
