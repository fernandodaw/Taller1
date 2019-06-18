@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        LISTADO DE CITAS CONFIRMADAS
    </div>
    <div >
        <br>
    </div>

    <table class="table table-responsive table-striped">
      <thead class="thead-dark">
      <tr>
        <th>Matrícula</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Observación</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>¿Realizada?</th>

      </tr>
      </thead>
    @foreach ($citas as $cita)
    <tbody>
      <tr>
        <!--ponemos la ruta para que al pinchar en la matricula, nos muestre los datos para actualizar-->
        <td><a href="{{route('citas.edit',$cita->id)}}">{{$cita->Matricula  }} </a> </td>

        <td>{{$cita->Propietario   }}</td>
        <td>{{$cita->Tipo   }}</td>
        <td>{{$cita->Email  }}</td>
        <td>{{$cita->Telefono  }}</td>
        <td>{{$cita->Observacion  }}</td>
        <td>{{$cita->Fecha   }}</td>
        <td>{{$cita->Hora    }}</td>
        <td>
            <form method="post" action="/citas/{{$cita->id}}">
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary" name="_method" value="DELETE">SÍ</button>
                <input type="hidden" name="_method" value="DELETE">
            </form>

        </td>

    </tr>
    </tbody>

    @endforeach
    </table>



@endsection
@section ("pie")

@endsection