@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    EDITAR  VEHICULO
    <form method="post" action="/vehiculos/{{$vehiculo->id}}">

        <div class="form-row">
            <div class="form-group col-md-2">
        {{--        <label for="inputCliente">Identificador</label>
                <input type="text" name="cliente_id" value="{{$vehiculo->cliente_id}}">
--}}
                <input type="hidden" name="_method" value="PUT">
                {{csrf_field()}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inpuMatricula">Matrícula</label>
                <input type="text" class="form-control" name="Matricula" value="{{$vehiculo->Matricula}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputMarca">Marca</label>
                <input type="text" class="form-control" name="Marca" value="{{$vehiculo->Marca}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputModelo">Modelo</label>
                <input type="text" class="form-control" name="Modelo" value="{{$vehiculo->Modelo}}">
            </div>
        </div>


        <button type="submit" class="btn btn-primary" name="Actualizar" value="Actualizar">Actualizar</button>
    </form>

    </form>
        {{--

    <table>

    <tr>
            <td>cliente_id:</td>
            <td>
                <input type="text" name="cliente_id" value="{{$vehiculo->cliente_id}}">

                {{csrf_field()}}

            <input type="hidden" name="_method" value="PUT">
        </td>
    </tr>


<tr>
    <td>Matricula:</td>
    <td>
        <input type="text" name="Matricula" value="{{$vehiculo->Matricula}}">
        </td>
    </tr>

        <tr>
            <td>Marca:</td>
            <td>
                <input type="text" name="Marca" value="{{$vehiculo->Marca}}">
            </td>
        </tr>

        <tr>
            <td>Modelo:</td>
            <td>
                <input type="text" name="Modelo" value="{{$vehiculo->Modelo}}">
            </td>
        </tr>

        <tr>
     <td>
    <input type="submit" name="Actualizar" value="Actualizar">
     </td>
      <td>
     <input type="reset" name="Borrar" value="Borrar campos">
      </td>
     </tr>
    </table>
 --}}

    <div >
            <br>
    </div>



    <!-- Formulario para las acciones de borrado de registros -->
    <form method="post" action="/vehiculos/{{$vehiculo->id}}">

        {{csrf_field()}}
        <button type="submit" class="btn btn-primary" name="_method" value="DELETE">Eliminar registro</button>
        <input type="hidden" name="_method" value="DELETE"> <!-- El metodo DELETE como se ve en el listado  -->
    </form>



@endsection
@section ("pie")

@endsection