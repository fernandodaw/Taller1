@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        LISTADO DE REPARACIONES
    </div>

    <table class="table table-responsive table-striped">
        <thead class="thead-dark">
    <tr>
        <th>Vehículo</th>
        <th>Fecha</th>
        <th>Km</th>
        <th>Reparación realizada</th>
        <th>Importe</th>

    </tr>
        </thead>
    @foreach ($reparaciones as $reparacion)
            <tbody>
    <tr>
        <!--ponemos la ruta para que al pinchar en el dni, nos muestre los datos y  podamos actualizar la reparacion-->
        <td><a href="{{route('reparaciones.edit',$reparacion->id)}}">{{$reparacion->vehiculo_id  }} </a> </td>
    {{--
            <td><a href="{{route('reparaciones.edit',$reparacion->id)}}">{{$vehiculo->Matricula}} </a> </td>
    --}}        <td>  {{$reparacion->Fecha  }}</td>
            <td>{{$reparacion->Km  }}</td>

            <td>  {{$reparacion->Observacion  }}</td>
            <td>  {{$reparacion->Precio  }}</td>
        </tr>
                </tbody>
        @endforeach
        </table>
    @endsection
    @section ("pie")

    @endsection