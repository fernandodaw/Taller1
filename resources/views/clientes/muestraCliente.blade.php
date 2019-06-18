@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")

    <div class="cabecera">
        CLIENTE Y VEHICULO/S QUE TIENE:
    </div>
    <div >
        <br>
    </div>
    <table class="table table-responsive table-striped">
        <thead class="thead-dark">
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Domicilio</th>
            <th>Población</th>
            <th>Provincia</th>
            <th>Cp</th>
            <th>Teléfono</th>
            <th>E-mail</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{$cliente->Dni  }}  </td>
            <td>{{$cliente->Nombre   }}  </td>
            <td>{{ $cliente->Apellido   }}</td>
            <td>{{$cliente->Domicilio  }}</td>
            <td>  {{$cliente->Poblacion  }}</td>
            <td>  {{$cliente->Provincia  }}</td>
            <td>   {{$cliente->Cp         }}</td>
            <td>   {{$cliente->Telefono   }}</td>
            <td>  {{$cliente->Email      }}</td>
        </tr>
        </tbody>
    </table>
<!-- ***************************************************************************************************** -->

        <!-- ***************************************************************************************************** -->


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
                <td><a href="{{url('/Repara/'.$vehiculo->id)}}">{{$vehiculo->Matricula  }} </a> </td>

             {{--   <td>{{ $vehiculo->Matricula  }}</td>  --}}
                <td>{{$vehiculo->Marca  }}</td>
                <td>{{$vehiculo->Modelo  }}</td>
            </tr>
            </tbody>
        @endforeach
     </table>

        <!-- ***************************************************************************************************** -->

@endsection
@section ("pie")

@endsection