<?php

namespace App\Http\Controllers;

use App\Directorio_Contactos;
use Illuminate\Http\Request;

class DirectorioContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['directorio_contactos'] = Directorio_Contactos::paginate(10);
        return view('directorio_contactos.index',$datos); //agregar ,$datos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('directorio_contactos.create');

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
        $datosDirectorio_Contactos = request()->except('_token');
        Directorio_Contactos::insert($datosDirectorio_Contactos);
        return response()->json($datosDirectorio_Contactos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Directorio_Contactos  $directorio_Contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Directorio_Contactos $directorio_Contactos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Directorio_Contactos  $directorio_Contactos
     * @return \Illuminate\Http\Response
     */
    public function edit(Directorio_Contactos $directorio_Contactos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Directorio_Contactos  $directorio_Contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directorio_Contactos $directorio_Contactos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Directorio_Contactos  $directorio_Contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directorio_Contactos $directorio_Contactos)
    {
        //
    }
}
