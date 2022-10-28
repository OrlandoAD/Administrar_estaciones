@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<div class="container ">

<section class="content container-fluid" >
        <div class="row d-flex justify-content-center" >
            <div class="col-md-6 ">
                <div class="card ">
                    <div class="card-header"   style="background-color: #393737; shadow-sm"  >
                        <div class="float-left ">
                            <span class="card-title" >
                                <h3>
                                    <font color="#ffffff">
                                    <b>Detalles: |{{ $estaciones->Estacion }}|</b>
                                    </font>
                                </h3>
                            </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-danger" href="{{ route('estaciones.index') }}"> Regresar</a>
                        </div>
                    </div>
                    
                    <div class="card-body" style="background-color: #CDCDCD; shadow-sm" >
                        
                        <div class="form-group" style="text-align: center">
                            <strong>Estado: </strong>
                            {{ $estaciones->Estado }}
                        </div>
                        <div class="form-group" style="text-align: center">
                            <strong>Estacion:</strong>
                            {{ $estaciones->Estacion }}
                        </div>
                        <div class="form-group" style="text-align: center">
                            <strong>Estado Republica:</strong>
                            {{ $estaciones->Estado_Republica }}
                        </div>
                        <div class="form-group" style="text-align: center">
                            <strong>Dispensarios Activos:</strong>
                            {{ $estaciones->Dispensarios_Activos }}
                        </div>
                        <div class="form-group" style="text-align: center">
                            <strong>Dispensarios Totales:</strong>
                            {{ $estaciones->Dispensarios_Totales }}
                        </div>

                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
