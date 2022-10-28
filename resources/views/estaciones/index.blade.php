@extends('layouts.app')

@section('content')



<!-- BOTON DE FILTRADO POR PROGRAMAR -->
<div class="dropdown" style="text-align: center">
  <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
    Filtrar por INACTIVOS (PRIMERO)
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>

<br>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="container">

<table class="table table-striped">
    

    <thead class="thead-dark">
        <tr>
            
            <th style="text-align: center">Estado</th>
            <th style="text-align: center">Estación</th>
            <th style="text-align: center">Estado de la Republica</th>
            <th style="text-align: center">Dispensarios Activos</th>
            <th style="text-align: center">Dispensarios Totales</th>
            <th style="text-align: center">Acciones</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $estaciones as $estacion )
        <tr>
            <td style="text-align: center">
            <h4>
            <b>
                @if($estacion->Estado == 'Activo')
                <span style="color:green;">{{$estacion->Estado}}</span>
                @elseif($estacion->Estado == 'Inactivo')
                <span style="color:red;">{{$estacion->Estado}}</span>
                @else
                <span style="color:orange;">{{$estacion->Estado}}</span>
                @endif
            </b>
            </h4>
            </td>

            
            <td style="text-align: center">{{ $estacion->Estacion }}</td>
            <td style="text-align: center">{{ $estacion->Estado_Republica }}</td>

            <td style="text-align: center">
                @if($estacion->Dispensarios_Activos == '0')
                <span style="color:red;">{{$estacion->Dispensarios_Activos}}</span>
                @else
                <span style="color:#000000;">{{$estacion->Dispensarios_Activos}}</span>
                @endif
            </td>

            <td style="text-align: center">{{ $estacion->Dispensarios_Totales }}</td>
            <td style="text-align: center">           
                <a class="btn btn-sm btn-primary " href="{{ route('detalles.index',$estacion->id) }}"> Detalles</a>    
                <a class="btn btn-sm btn-success " href="{{ route('versiones.index',$estacion->id) }}"> Versiones</a>
                <a class="btn btn-sm btn-secondary " href="{{ route('accesos.index',$estacion->id) }}"> Accesos</a>         
                                         
        </tr>                                
        @endforeach
    </tbody>


</table>


<div class= "row">
    <div class="d-flex justify-content-center" >
{!! $estaciones->links() !!}
    </div>
</div>

</div>


@endsection





