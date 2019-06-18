@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        LISTADO DE CLIENTES
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
        <th>Datos</th>
      </tr>
     </thead>

    @foreach ($clientes as $cliente)
    <tbody>
     <tr>
        <!--ponemos la ruta para que al pinchar en el dni, nos muestre los datos y  podamos actualizar el cliente-->
        <td><a href="{{route('clientes.edit',$cliente->id)}}">{{$cliente->Dni  }} </a> </td>
        <td>{{$cliente->Nombre   }}  </td>
        <td>{{ $cliente->Apellido   }}</td>
        <td>{{$cliente->Domicilio  }}</td>
        <td>  {{$cliente->Poblacion  }}</td>
        <td>  {{$cliente->Provincia  }}</td>
        <td>   {{$cliente->Cp         }}</td>
        <td>   {{$cliente->Telefono   }}</td>
        <td>  {{$cliente->Email      }}</td>
        <td><a href="{{route('clientes.show',$cliente->id)}}"> Datos</a> </td>
      </tr>
    </tbody>

    @endforeach
    </table>
@endsection
@section ("pie")

@endsection