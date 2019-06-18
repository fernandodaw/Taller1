@extends ("../layouts.baseexterior")

@section ("cabecera")

@endsection

@section ("contenido")
        <div class="cabecera">
         INSERCION DE CITA- SELECCIONE FECHA
        </div>
        <!-- ****Controlamos que la fecha no es anterior a hoy mostrando un mensaje en tal caso****-->
        @if ( !empty($fechaMala))  {{-- Si desde el controlador manda error en la fecha--}}
                <div><h2 style="color:blue;">{{$fechaMala}}</h2>
        <!--          <p>{{$fechaMala}}</p><p>{{$fechaC}}</p><p>{{$fecha}}</p></div>
-->
        @endif
        <!-- *************** Formulario de la vista ***************-->
   <form method="get" action="/citas/fecha/">


            <!--   ***************calendario******************* -->
       <div class="form-row">

           <div class="form-group col-md-3">
               <label for="inputTipo">Fecha</label>
           <input type='date'  name="dia" class="form-control"  value="{{old('Fecha',date('d-m-Y'))}}"/>
           </div>

            <!--  *****************Fin calendario*****************      -->


       </div>
       <button type="submit" class="btn btn-primary">Ver horas disponibles</button>
   </form>

    @if (!empty($disponibles))


        <div class="col-md-6 form-group">
            <ul>
                @foreach ($disponibles as $hora)
                    <li>
                        <input type="checkbox" name="horas[]" value="{{ $hora }}" > {{ $hora }}
                    </li>
                @endforeach
            </ul></div>
            <div>
     <!--           <button type="submit" class="btn btn-primary">Insertar</button>
       -->     </div>

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