@extends ("../layouts.baseexterior")

@section ("cabecera")

@endsection

@section ("contenido")
        <div class="cabecera">
         INSERCION DE CITA
        </div>
        <!-- ****Controlamos que la fecha no es anterior a hoy mostrando un mensaje en tal caso****-->
        @if ( !empty($fechaMala))  {{-- Si desde el controlador manda error en la fecha--}}
                <div><h2 style="color:blue;">{{$fechaMala}}</h2>
      {{--            <p>{{$fechaMala}}</p><p>{{$fechaC}}</p><p>{{$fecha}}</p></div>
        --}}
        @endif
        <!-- *************** Formulario de la vista ***************-->
   <form method="post" action="/citas">
         <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputMatricula">Matrícula</label>
                <input type="text" class="form-control" id="inputMatricula" placeholder="Matrícula"
                       name="Matricula" required>
                {{csrf_field()}}
            </div>
            <div class="form-group col-md-6">
                <label for="inputPropietario">Nombre</label>
                <input type="text" class="form-control" name="Propietario" id="inputPropietario" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputTipo">Tipo de reparación</label>
                <select id="inputTipo" class="form-control" name="Tipo">
                    <option selected>Selecciona una</option>
                    <option>Avería</option>
                    <option>Matenimiento periódico</option>
                    <option>ITV</option>
                </select>
            </div>
        </div>

        <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="inputObservacion">Detalle marca, modelo, km, año y tipo de avería en su caso.</label>
                    <input type="textarea"  class="form-control" name="Observacion" id="inputObservacion">
                </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputTfno">Teléfono</label>
                <input type="tel" class="form-control"  name="Telefono" id="inputTfno" required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control"  name="Email" id="inputEmail" >
            </div>
        </div>

       <input type="hidden" name="Confirma" value="0">


            <!--   ***************calendario******************* -->
       <div class="form-row">


           <div class="form-group col-md-3">
               <label for="inputTipo">Fecha</label>
           <input type='date'  name="Fecha" class="form-control"  value="{{$fecha}}"/>
           </div>

            <!--  *****************Fin calendario*****************      -->


       </div>

    @if (!empty($disponibles))
        <div class="col-md-6 form-group">
            <ul>
                @foreach ($disponibles as $hora)
                    <li>
                        <input type="checkbox" name="Hora" value="{{ $hora }}" > {{ $hora }}
                    </li>
                @endforeach
            </ul></div>
            <div>
                <button type="submit" class="btn btn-primary">INSERTAR</button>
   </form>

                </div>
      @endif


                    <!--  para la seleccion de horario

                      <div class="form-group col-md-2">
                          <label for="inputTipo">Hora</label>
                          <select id="inputTipo" class="form-control" name="Hora" required>
                              <option value="" disabled selected>Selecciona una</option>
                              <option>9:00</option>
                              <option>10:00</option>
                              <option>11:00</option>
                              <option>12:00</option>
                              <option>13:00</option>
                              <option>16:00</option>
                              <option>17:00</option>
                              <option>18:00</option>
                          </select>
                      </div>
                      </div>


              -->


        <!-- para el calendario-->
        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


        <!-- fin del calendario-->

@endsection
@section ("pie")

@endsection