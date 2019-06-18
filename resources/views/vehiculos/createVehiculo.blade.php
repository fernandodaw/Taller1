@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
    <div class="cabecera">
        INSERCION DE VEHÍCULOS
    </div>


    <div>
    <form method="post" action="/vehiculos">
    <table>
    <tr>

    <td>

        <input type="hidden" name="cliente_id" value="{{ env('QUERY_STRING') }}">

        {{csrf_field()}}

    </td>
    </tr>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputMatricula">Matrícula</label>
                <input type="text" style="text-transform: uppercase;"  class="form-control" id="inputMatricula" placeholder="Letra mayúscula"
                       name="Matricula" required>
                {{csrf_field()}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputMarca">Marca</label>
                <input type="text" class="form-control" name="Marca" id="inputMarca" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputModelo">Modelo</label>
                <input type="text" class="form-control" name="Modelo" id="inputMoodelo" required>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Insertar</button>

    </form>
    </div>


@endsection
@section ("pie")

@endsection