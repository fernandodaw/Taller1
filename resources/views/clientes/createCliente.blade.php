@extends ("../layouts.plantilla")

@section ("cabecera")

@endsection

@section ("contenido")
        <div class="cabecera">
         INSERCION DE CLIENTES
        </div>


        <form method="post" action="/clientes">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputDni">Dni</label>
                <input type="text"   class="form-control" id="inputDni" placeholder=" 12345678A"
                       name="Dni" pattern="(([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))" required>
                {{csrf_field()}}
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="Nombre" id="inputNombre" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputApellido">Apellidos</label>
                <input type="text" class="form-control" name="Apellido" id="inputApellido" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputDomicilio">Domicilio</label>
                <input type="text" class="form-control" name="Domicilio" id="inputDomicilio">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPoblacion">Población</label>
                <input type="text" class="form-control" name="Poblacion" id="inputPoblacion">
            </div>
            <div class="form-group col-md-4">
                <label for="inputProincia">Provincia</label>
                <input type="text" class="form-control" name="Provincia" id="inputProvincia">
            </div>
            <div class="form-group col-md-2">
                <label for="inputCp">Código Postal</label>
                <input type="text" class="form-control" name="Cp" id="inputCp">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputTfno">Teléfono</label>
                <input type="tel" class="form-control"  name="Telefono" id="inputTfno" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmai">Email</label>
                <input type="email" class="form-control"  name="Email" id="inputEmai" >
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Insertar</button>
    </form>



@endsection
@section ("pie")

@endsection