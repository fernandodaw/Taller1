@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        BUSQUEDA DE VEHÍCULO
    </div>
    <div>
        <br>
    </div>

<!-- formulario para la busqueda de la matrícula  al que ingresar la reparación que insetaremos-->
    <div>
        <form action="/searchMatr" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="INSERTA MATRICULA DEL VEHICULO"> <span class="input-group-btn">
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-search">BUSCAR</span>
            </button>
        </span>
            </div>
        </form>
    </div>




<!-- formulario con los resultados de la busqueda del vehiculo cuya reparacion se añade-->
    <div class="container">
        @if(isset($details))
            <p> </p>
            <p> Resultados que contienen <b> {{ $query }} </b> en matrícula son :</p>
            <p> Seleccione el vehículo correcto:</p>
            <h2>Detalles</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $vehiculo)
                    <tr>
                        <td>{{$vehiculo->Matricula}}</td>
                        <td>{{$vehiculo->Marca}}</td>
                        <td>{{$vehiculo->Modelo}}</td>
                        <td>
                         {{--    <a href="{{route('reparaciones.create', $vehiculo->id)}}">envia
                           --}}
                                  <a href="{{url('/Repara/'.$vehiculo->id)}}">envia</a>

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