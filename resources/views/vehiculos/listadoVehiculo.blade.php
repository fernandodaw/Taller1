@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")

    <div class="cabecera">
        LISTADO DE VEHICULOS
    </div>

    <table class="table table-responsive table-striped">
        <thead class="thead-dark">
    <tr>

        <th>Matrícula</th>
        <th>Marca</th>
        <th>Modelo</th>

    </tr>
        </thead>
    @foreach ($vehiculos as $vehiculo)
    <tbody>
    <tr>
        {{--     <td><a href="{{route('vehiculos.edit',$vehiculo->id)}}">{{$vehiculo->cliente_id }} </a> </td>--}}
        {{--     <td>{{ $vehiculo->Matricula  }}</td> --}}



        {{-- ponemos la ruta para que al pinchar en la matricula, nos muestre los datos y  podamos actualizar el vehiculo--}}
        <td><a href="{{route('vehiculos.edit',$vehiculo->id)}}">{{$vehiculo->Matricula  }} </a> </td>
        <td>{{$vehiculo->Marca  }}</td>
        <td>  {{$vehiculo->Modelo  }}</td>

    </tr>
    </tbody>
    @endforeach
    </table>
@endsection
@section ("pie")

@endsection