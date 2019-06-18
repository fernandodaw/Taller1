@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        LISTADO DE CITAS PENDIENTES DE CONFIRMAR
    </div>
    <div >
        <br>
    </div>

    <table class="table table-responsive table-striped">
      <thead class="thead-dark">
      <tr>
        <th>Matrícula</th>
        <th>Nombre</th>
        <th>Tipo de Trabajo</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Datos</th>
        <th>Fecha</th>
        <th>Hora</th>
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

    </tr>
    </tbody>

    @endforeach
    </table>



@endsection
@section ("pie")

@endsection