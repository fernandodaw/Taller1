@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        INSERCION DE VEHICULOS
    </div>
<!-- formulario para la busqueda del cliente al que pertenece el vehiculo que insetaremos-->
    <div>
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="INSERTA DNI DEL CLIENTE, o APELLIDO"> <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-search">BUSCAR</span>
            </button>
        </span>
            </div>
        </form>
    </div>




<!-- formulario con los resultados de la busqueda del cliente al que pertenece el vehiculo-->
    <div class="container">
        @if(isset($details))
            <p> </p>
            <p> Resultados que contienen "<b> {{ $query }} </b>" en el DNI o Apellido son :</p>
            <p> Seleccione el cliente propietario del vehículo:</p>
            <h2>Detalles</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Dni</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $cliente)
                    <tr>
                        <td>{{$cliente->Dni}}</td>
                        <td>{{$cliente->Nombre}}</td>
                        <td>{{$cliente->Apellido}}</td>
                        <td>
                              <a href="{{route('vehiculos.create',$cliente->id)}}">Inserta vehículo
                              <!--           <form action="/vehiculos/create" method="get" role="selct">
                                  <input type="text" class="form-control" name="q" >

                                <input type="submit">
                          </form>
-->

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
@section ("pie")

@endsection