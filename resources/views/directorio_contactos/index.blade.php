@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container">

        <div class="float-right">
            
            <a class="btn btn-danger" href="{{ route('estaciones.index') }}"> Regresar al INICIO</a>
        </div>

        <h1>
            <strong>
                DIRECTORIO DE CONTACTOS
</strong>
        </h1>

        <br>
<table class="table table-striped">
    

    <thead class="thead-dark">
        <tr>
            <th style="text-align: center">Plaza</th>
            <th style="text-align: center">Jefe Operativo</th>
            <th style="text-align: center">Email</th>
            <th style="text-align: center">Telefono</th>
            <th style="text-align: center">Estacion</th>
            <th style="text-align: center">Supervisor</th>
            <th style="text-align: center">Email</th>
            <th style="text-align: center">Telefono</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $directorio_contactos as $directorio )
        <tr>
 
            <td style="text-align: center">{{ $directorio->Plaza }}</td>
            <td style="text-align: center">{{ $directorio->Jefe_operativo }}</td>
            <td style="text-align: center">{{ $directorio->Email_jefe }}</td>
            <td style="text-align: center">{{ $directorio->Tel_jefe }}</td>
            <td style="text-align: center">{{ $directorio->Estacion_directorio }}</td>
            <td style="text-align: center">{{ $directorio->Supervisor }}</td>
            <td style="text-align: center">{{ $directorio->Email_supervisor }}</td>
            <td style="text-align: center">{{ $directorio->Tel_supervisor }}</td>
                      
        </tr>                                
        @endforeach
    </tbody>


</table>


<div class= "row">
    <div class="d-flex justify-content-center" >
{!! $directorio_contactos->links() !!}
    </div>
</div>

</div>


@endsection