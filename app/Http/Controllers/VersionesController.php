<?php

namespace App\Http\Controllers;

use App\Versiones;
use App\Estaciones;
use Illuminate\Http\Request;

class VersionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['versiones'] = Versiones::paginate(10);
        return view('versiones.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $versiones = new Versiones();
        $estaciones = Estaciones::pluck('Estacion','id');
        return view('versiones.create', compact('versiones','estaciones'));
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
        $datosVersiones = request()->except('_token');
        Versiones::insert($datosVersiones);
        return response()->json($datosVersiones);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Versiones  $versiones
     * @return \Illuminate\Http\Response
     */
    public function show(Versiones $versiones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Versiones  $versiones
     * @return \Illuminate\Http\Response
     */
    public function edit(Versiones $versiones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Versiones  $versiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Versiones $versiones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Versiones  $versiones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Versiones $versiones)
    {
        //
    }
}
