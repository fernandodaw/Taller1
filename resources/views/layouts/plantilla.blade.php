<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>AREA TALLER</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<style>

      html, body {
            background-color: #fff;
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

<div >

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
                <img src="\images\logo.jpg" width="30" height="30" class="rounded float-right" alt="">
            </a>
        </div>
    </nav>




   <!-- <img src="\images\logo.jpg" class="imagenCabecera">-->
</div>


<div class="container">


    @yield("contenido")
</div>


<div class="pie">
    @yield("pie")

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>
