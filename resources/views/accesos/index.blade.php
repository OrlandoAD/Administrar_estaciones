@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<div class="container ">

<section class="content container-fluid" >
        <div class="row d-flex justify-content-center" >
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header"   style="background-color: #393737; shadow-sm"  >
                        <div class="float-left ">
                        @foreach( $accesos as $acceso )
                        @endforeach
                            <span class="card-title" >
                                <h3>
                                    <font color="#ffffff">
                                    <b>Accesos: |{{ $acceso->estaciones->Estacion }}|</b>
                                    </font>
                                </h3>
                            </span>
                           
                           
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('estaciones.index') }}"> Regresar</a>
                        </div>
                    </div>
                    
                    <div class="container">

                        <table class="table table-striped">

                        <thead class="table table-striped">
                            <tr>
                                
                                <th style="text-align: center"> </th>
                                <th style="text-align: center">
                                    <h4>
                                        <b>
                                            Usuario
                                        </b>
                                    </h4>
                                </th>

                                <th style="text-align: center">
                                    <h4>
                                        <b>
                                            Contraseña
                                        </b>
                                    </h4>
                                </th>
                            </tr>
                        </thead>
                            
                            <tbody>
                                @foreach( $accesos as $acceso )
                                <tr>

                                <td style="text-align: center">
                                    <h4>
                                        <b>
                                    {{ $acceso->Programa }}
                                        </b>
                                    </h4>
                                </td>
                                
                                
                                <td style="text-align: center">
                                    <h7>
                                        <b>
                                    {{ $acceso->Usuario }}
                                        </b>
                                    </h7>
                                </td>
                                
                                
                                <td style="text-align: center">
                                    <h7>
                                        <b>
                                    {{ $acceso->Contrasena }}
                                        </b>
                                    </h7>
                                </td>
                                
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                    <div class= "row">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
@endsection