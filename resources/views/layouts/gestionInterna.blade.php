<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>AREA TALLER</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<style>
/*
    .imagenCabecera{
        float: right;
        padding-right: 15px;
        width: 10px;
    }
       .cabecera{
            text-align: center;
            font-size: x-large;
            font-family: Tahoma, Geneva, sans-serif;
            margin-bottom: 100px;
        }
         */
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }


        .m-b-md {
            margin-bottom: 30px;
        }


        .contenido form, table{
            width: 300px;
            margin: 0 auto;
        }
        .pie{
            position: fixed;
            bottom: 10px;
            width: 100%;
            font-size: 2em;
            margin-bottom: 15px;
            text-align: center;
        }
</style>
</head>
<body>

<div class="cabecera">

@yield("cabecera")
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/taller">PRINCIPAL </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                </li>
                <a class="navbar-brand" href="/">HOME</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navCliente" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cliente
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navCliente">
                        <a class="dropdown-item" href="/clientes/create">Insertar</a>
                        <a class="dropdown-item" href="/clientes">Listado</a>
                        <a class="dropdown-item" href="/buscarClientePorDni">Buscar cliente</a>

                    </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navVehiculo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Vehículos
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navVehiculo">
                      <a class="dropdown-item" href="/buscar">Insertar</a>
                      <a class="dropdown-item" href="/vehiculos">Listado</a>
                      <a class="dropdown-item" href="/buscarClientePorMatri">Buscar propietario</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navReparaciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Reparaciones
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navReparaciones">
                      <a class="dropdown-item" href="/buscarMatricula">Insertar</a>
                      <a class="dropdown-item" href="/reparaciones">Listado</a>
                      <a class="dropdown-item" href="/reparacionPorMatricula">Reparaciones de un vehículo</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navReparaciones" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Citas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navReparaciones">
                      <a class="dropdown-item" href="/citas">Solicitadas</a>
                      <a class="dropdown-item" href="/Confirmada">Confirmadas</a>
                  </div>
              </li>


          </ul>

          <!--


                <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
               -->
            <a class="navbar-brand" href="#">
                <img src="\images\logo.jpg" width="30" height="30" alt="">
            </a>
        </div>
    </nav>




        @if (Route::has('login'))

            <div class="top-right links">
                @auth

  {{--                 <a href="{{ url('/home') }}">Home</a>
                               <p> {{ Auth::user()->name }}</p>
  --}}
                @else
   {{--                 <a href="{{ route('login') }}">Login</a>
    --}
                    {{-- IMPEDIMOS QUE SE PUEDA REGISTRAR DESDE LA PAGINA PRINCIPAL
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    --}}

                @endauth
            </div>
    @endif



   <!-- <img src="\images\logo.jpg" class="imagenCabecera">-->
</div>


<div class="container">
    @yield("contenido")

    <div class="card" style="width: 18rem; margin:20px auto">
        <img class="card-img-top" src="\images\logo.jpg" alt="Card image cap  >
    <div class="card-body">
    </div>

    <div class="content">
        <div class="title m-b-md">

            GESTIÓN   INTERNA
        </div>
    </div>
</div>


<div class="pie">
    @yield("pie")

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
