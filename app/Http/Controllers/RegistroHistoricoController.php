<?php

namespace App\Http\Controllers;

use App\Registro_historico;
use Illuminate\Http\Request;

class RegistroHistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['registro_historico'] = Registro_historico::paginate(10);
        return view('registro_historico.index',$datos); //agregar ,$datos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registro_historico.create');
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
        $datosRegistro_historico = request()->except('_token');
        Registro_historico::insert($datosRegistro_historico);
        return response()->json($datosRegistro_historico);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registro_historico  $registro_historico
     * @return \Illuminate\Http\Response
     */
    public function show(Registro_historico $registro_historico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Registro_historico  $registro_historico
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro_historico $registro_historico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Registro_historico  $registro_historico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro_historico $registro_historico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Registro_historico  $registro_historico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro_historico $registro_historico)
    {
        //
    }
}
