@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container">

        <div class="float-right">
            <a class="btn btn-danger" href="{{ route('estaciones.index') }}"> Regresar al INICIO</a>
        </div>
        <h1>
            <strong>
                REGISTRO HISTORICO (MANTENIMIENTO)
            </strong>
        </h1>

        <br>
<table class="table table-striped">
    

    <thead class="thead-dark">
        <tr>
            <th style="text-align: center">Estado</th>
            <th style="text-align: center">Estacion</th>
            <th style="text-align: center">Registro de reemplazo</th>
            <th style="text-align: center">Observaciones</th>
            <th style="text-align: center">Último chequeo</th>
            <th style="text-align: center">No BREAKS reemplazados</th>
            <th style="text-align: center">Último chequeo</th>
            <th style="text-align: center">Número de serie de dispositivos reemplazados</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $registro_historico as $registro )
        <tr>
 
            <td style="text-align: center">{{ $registro->Estado_rep }}</td>
            <td style="text-align: center">{{ $registro->Estacion_registro }}</td>
            <td style="text-align: center">{{ $registro->Registro_reemplazo }}</td>
            <td style="text-align: center">{{ $registro->Observaciones }}</td>
            <td style="text-align: center">{{ $registro->Ultimo_chequeo_obs }}</td>
            <td style="text-align: center">{{ $registro->Nobreaks_reemplazados }}</td>
            <td style="text-align: center">{{ $registro->Ultimo_chequeo_nobreaks }}</td>
            <td style="text-align: center">{{ $registro->Numero_Serie }}</td>
                      
        </tr>                                
        @endforeach
    </tbody>


</table>


<div class= "row">
    <div class="d-flex justify-content-center" >
{!! $registro_historico->links() !!}
    </div>
</div>

</div>

@endsection