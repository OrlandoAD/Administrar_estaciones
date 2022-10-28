<?php

namespace App\Http\Controllers;

use App\Accesos;
use App\Estaciones;
use Illuminate\Http\Request;

class AccesosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['accesos'] = Accesos::paginate(10);
        return view('accesos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $accesos = new Accesos();
        $estaciones = Estaciones::pluck('Estacion','id');
        return view('accesos.create', compact('accesos','estaciones'));
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
        $datosAccesos = request()->except('_token');
        Accesos::insert($datosAccesos);
        return response()->json($datosAccesos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accesos  $accesos
     * @return \Illuminate\Http\Response
     */
    public function show(Accesos $accesos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accesos  $accesos
     * @return \Illuminate\Http\Response
     */
    public function edit(Accesos $accesos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accesos  $accesos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accesos $accesos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accesos  $accesos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accesos $accesos)
    {
        //
    }
}
