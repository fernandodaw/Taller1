@extends ("../layouts.baseexterior")

@section ("cabecera")

@endsection

@section ("contenido")
        <div class="cabecera">
            DATOS DE SU CITA

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputMatricula">Matrícula</label>
                    <input type="text" class="form-control" name="Matricula" value="{{$cita->Matricula}}"readonly="readonly">

                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPropietario">Nombre</label>
                    <input type="text" class="form-control" name="Propietario" value="{{$cita->Propietario}}"readonly="readonly">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputTipo">Tipo de reparación</label>
                    <input  class="form-control"  name="Tipo" value="{{$cita->Tipo}}"readonly="readonly">
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputObservacion">Datos </label>
                    <input type="text" class="form-control" name="Observacion" value="{{$cita->Observacion}}"readonly="readonly">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputTfno">Teléfono</label>
                    <input type="tel" class="form-control"  name="Telefono" value="{{$cita->Telefono}}"readonly="readonly">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmai">Email</label>
                    <input type="email" class="form-control"  name="Email" value="{{$cita->Email}}" readonly="readonly">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputDate">Fecha</label>
                    <input type="text" class="form-control" name="Fecha" value="{{$cita->Fecha}}"readonly="readonly">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputTipo">Hora</label>
                    <input type="text" class="form-control" name="Hora" value="{{$cita->Hora}}"readonly="readonly">
                </div>
            </div>
            <div><h4 style="color:blue;">EN BREVE NOS PONDREMOS EN CONTACTO CON USTED</h4></div>

                <div class="form-group">
                    <a class="col-md-12 text-center">
                        <a href="/"  type="button" class="btn btn-primary btn-lg">PÁGINA PRINCIPAL</a>
                    </div>
                </div>




@endsection
@section ("pie")

@endsection