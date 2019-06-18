@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
    EDITAR  CITA
    </div>
<div>
    <br>
</div>
    <form method="post" action="/citas/{{$cita->id}}">

        <div class="form-row">
          <div class="form-group col-md-2">
                <label for="inputMatricula">Matrícula</label>
                <input type="text" class="form-control" name="Matricula" value="{{$cita->Matricula}}">

                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
            </div>
            <div class="form-group col-md-6">
                <label for="inputPropietario">Nombre</label>
                <input type="text" class="form-control" name="Propietario" value="{{$cita->Propietario}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputTipo">Tipo de reparación</label>
                <input  class="form-control"  name="Tipo" value="{{$cita->Tipo}}">
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputObservacion">Datos </label>
                <input type="text" class="form-control" name="Observacion" value="{{$cita->Observacion}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputTfno">Teléfono</label>
                <input type="tel" class="form-control"  name="Telefono" value="{{$cita->Telefono}}">
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmai">Email</label>
                <input type="email" class="form-control"  name="Email" value="{{$cita->Email}}">
            </div>
        </div>



        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputDate">Fecha</label>
                <input type="text" class="form-control" name="Fecha" value="{{$cita->Fecha}}">
            </div>
            <div class="form-group col-md-2">
                <label for="inputTipo">Hora</label>
                <input type="text" class="form-control" name="Hora" value="{{$cita->Hora}}">
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox"  name="Confirma" id="Confirma" value="1">
                <label class="form-check-label" for="Confirma" >
                    CONFIRMAR
                </label>
            </div>
        </div>




    <button type="submit" class="btn btn-primary" name="Actualizar" value="Actualizar">Actualizar</button>
    </form>
<div>
    <br>
</div>

    <!-- Formulario para las acciones de borrado de registros -->
    <form method="post" action="/citas/{{$cita->id}}">
        {{csrf_field()}}
    <button type="submit" class="btn btn-primary" name="_method" value="DELETE">Eliminar registro</button>
    <input type="hidden" name="_method" value="DELETE"> <!-- El metodo DELETE como se ve en el listado  -->
    </form>


@endsection
@section ("pie")

@endsection