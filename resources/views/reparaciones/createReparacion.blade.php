
@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        INSERCION DE REPARACION VEHICULO CON MATRICULA
    </div>
    <form method="post" action="/reparaciones">

    <table>
    <tr>

        <td>
        <!--    <input type="text" name="vehiculo_id">  -->
            <input type="hidden" name="vehiculo_id" value="{{ env('QUERY_STRING') }}">
            {{csrf_field()}}
        </td>
    </tr>


{{--
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputMatricula">matricula</label>
            <input type="text" name="Rep_Matricula" class="form-control"
                   id="inputMatricula" value="{{$vehiculo->Matricula}}">
            {{csrf_field()}}
        </div>
    </div>
        --}}




        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputKm">Kilómetros</label>
            <input type="text" name="Km" class="form-control"  id="inputKm" required>
            {{csrf_field()}}
        </div>
        <div class="form-group col-md-6">
            <label for="inputFecha">Fecha</label>
            <input type="text" name="Fecha"class="form-control" id="inputFecha" required>
        </div>
        <div class="form-group col-md-6">
                <label for="inputObservacion">Detalles de la reparación</label>
                <input  type="text" name="Observacion" class="form-control" id="inputObservacion" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputObservacion">Importe</label>
                <input  type="text" name="Precio" class="form-control" id="inputPrecio" required>
            </div>
    </div>


        <button type="submit" class="btn btn-primary">Insertar</button>


        <!--- ==========================================




        <tr>
        <td>Rep_Matricula:</td>
    <td>
        <input type="text" name="Rep_Matricula">
            {{csrf_field()}}
    </td>
    </tr>


    <tr>
        <td>DNI:</td>
        <td>
            <input type="text" name="Rep_Dni">
        </td>
    </tr>

        <tr>
            <td>Km:</td>
            <td>
                <input type="text" name="Km">
            </td>
        </tr>

        <tr>
            <td>Fecha:</td>
            <td>
                <input type="text" name="Fecha">
            </td>
        </tr>

        <tr>
            <td>Observacion:</td>
            <td>
                <input type="text" name="Observacion">
            </td>
        </tr>




     <tr>
     <td>
    <input type="submit" name="enviar" value="Enviar">
     </td>
      <td>
     <input type="reset" name="Borrar" value="Borrar">
      </td>
     </tr>
    </table>
    ========= -->
    </form>
@endsection
@section ("pie")

@endsection