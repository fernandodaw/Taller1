<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TALLER</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <style>
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

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


    </style>
</head>
<body>

<div >

@yield("cabecera")

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

 <!--           <li class="nav-item active">
                <a class="nav-link" href="#">Clientes <span class="sr-only">(current)</span></a>
            </li>
    -->        <li class="nav-item active">
                <a class="nav-link" href="/citas/fecha">Citas </a>
            </li>
 <!--           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="Dropdown" aria-haspopup="true" aria-expanded="false">
                    Cliente
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
          </li>
-->         <li class="nav-item active">
                <a class="nav-link " href="/contacto" tabindex="-1" aria-disabled="true">Contacto</a>
            </li>
        </ul>
  <!--      <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
  -->

        <a class="navbar-brand" href="#">
            <img src="\images\logo.jpg" width="30" height="30" alt="">
        </a>

    </div>
</nav>

</div>
<!-- **************************************************************************************************-->
<!-- **************************************************************************************************-->


<div class="container">

    @yield("contenido")
</div>

<!-- **************************************************************************************************-->
<!-- **************************************************************************************************-->
<!--
<div class="text-center" style="width: 18rem;vertical-align: middle">
    <img src="\images\logo.jpg" class="img-fluid"  >
</div>
-->

{{--
<div class="flex-center position-ref full-height">

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif


    </div>
--}}
<div class="footer">
    @yield("pie")





</div>

</body>
</html>
