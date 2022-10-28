<?php

namespace App\Http\Controllers;

use App\Detalles;
use App\Estaciones;
use Illuminate\Http\Request;

class DetallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['detalles'] = Detalles::paginate(10);
        return view('detalles.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $detalles = new Detalles();
        $estaciones = Estaciones::pluck('Estacion','id');
        return view('detalles.create', compact('detalles','estaciones'));
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
        $datosDetalles = request()->except('_token');
        Detalles::insert($datosDetalles);
        return response()->json($datosDetalles);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function show(Detalles $detalles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function edit(Detalles $detalles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detalles $detalles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Detalles  $detalles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalles $detalles)
    {
        //
    }
}
