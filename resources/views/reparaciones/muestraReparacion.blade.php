@extends ("../layouts.plantilla")

@section ("cabecera")
    REPARACION
@endsection

@section ("contenido")

    <table border="1">
    <tr>
        <td>id vehiculo</td>
        <td>matricula</td>
        <td>dni</td>
        <td>km</td>
        <td>fecha</td>
        <td>observacion</td>
    </tr>


    <tr>
        <td>{{$reparacion->vehiculo_id  }}  </td>
        <td>{{$vehiculo->Matricula}}  </td>

        <td>{{$reparacion->Km  }}</td>
        <td>  {{$reparacion->Fecha  }}</td>
        <td>  {{$reparacion->Observacion  }}</td>
        <td>  {{$reparacion->Precio  }}</td>
            </tr>


@endsection
@section ("pie")

@endsection