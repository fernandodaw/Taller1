@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    EDITAR  REPARACION
    <form method="post" action="/reparaciones/{{$reparacion->id}}">

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputMatricula">Matrícula</label>
                <input type="text" name="Rep_Matricula" value="{{$vehiculo->Matricula}}"readonly="readonly">

                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputKm">Kilómetros</label>
                <input type="text" class="form-control" name="Km" value="{{$reparacion->Km}}">
            </div>
            <div class="form-group col-md-2">
                <label for="inputFecha">Fecha</label>
                <input type="text" class="form-control" name="Fecha" value="{{$reparacion->Fecha}}">
            </div>
            <div class="form-group col-md-8">
                <label for="inputObservacion">Observación</label>
                <input type="text" class="form-control" name="Observacion" value="{{$reparacion->Observacion}}">
            </div>
            <div class="form-group col-md-4">
                <label for="inputObservacion">Importe</label>
                <input type="text" class="form-control" name="Precio" value="{{$reparacion->Precio}}">
            </div>
        </div>

        <!-- +++++++++++++++++++++++++++++++++++ +++++++++++ +++++++++ ++++

    <table>
    <tr>
        <td>vehiculo_id:</td>
    <td>
        <input type="text" name="vehiculo_id" value="{{$reparacion->vehiculo_id}}">

            {{csrf_field()}}

        <input type="hidden" name="_method" value="PUT">
    </td>
    </tr>


    <tr>
        <td>MATRICULA:</td>
        <td>
            <input type="text" name="Rep_Matricula" value="{{$reparacion->Rep_Matricula}}">
        </td>
    </tr>

        <tr>
            <td>DNI:</td>
            <td>
                <input type="text" name="Rep_Dni" value="{{$reparacion->Rep_Dni}}">
            </td>
        </tr>

        <tr>
            <td>Km:</td>
            <td>
                <input type="text" name="Km" value="{{$reparacion->Km}}">
            </td>
        </tr>

        <tr>
            <td>Fecha:</td>
            <td>
                <input type="text" name="Fecha" value="{{$reparacion->Fecha}}">
            </td>
        </tr>

        <tr>
            <td>Observacion:</td>
            <td>
                <input type="text" name="Observacion" value="{{$reparacion->Observacion}}">
            </td>
        </tr>



     <tr>
     <td>
    <input type="submit" name="Actualizar" value="Actualizar">
     </td>

     </tr>
    </table>
-->
        <button type="submit" class="btn btn-primary" name="Actualizar" value="Actualizar">Actualizar</button>
    </form>

    <div >
        <br>
    </div>
    <!-- Formulario para las acciones de borrado de registros -->
    <form method="post" action="/reparaciones/{{$reparacion->id}}">

        {{csrf_field()}}
        <button type="submit" class="btn btn-primary" name="_method" value="DELETE">Eliminar registro</button>
        <input type="hidden" name="_method" value="DELETE"> <!-- El metodo DELETE como se ve en el listado  -->
    </form>


@endsection
@section ("pie")

@endsection