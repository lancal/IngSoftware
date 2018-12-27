<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('tittle')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css"/>
    <!-- Fonts -->
    <link href=https://use.typekit.net/ynl5gwa.css" rel="stylesheet" type="text/css">

    <style>
        html, body {

            font-family: myriad-pro, sans-serif;
            font-weight: 200;
            font-style: normal;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003057;">

    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><img
                    src="http://www.ucn.cl/wp-content/uploads/2018/05/Escudo-UCN-Full-Color.png" width="" height="80"
                    alt="">
            <a class="navbar-brand" href="{{ route('home') }}">Vinculación DISC UCN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                    aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Inicio <span
                                    class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">


                    @if (Auth::guest())
                        {{--@if(Auth::user()->hasRole('admin'))--}}
                        {{--<div>Acceso como administrador</div>--}}
                        <a class="btn btn-outline-light" href="{{ route('login') }}" role="button">Ingresar </a>
                        <a class="btn btn-outline-light" href="{{ route('register') }}" role="button"> Registrarse</a>
                    @else
                        <li class="dropdown">
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>--}}
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">

                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Desconectarse
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
    </div>
</nav>

@yield('form')

@yield('contenido')
</div>

</body>
</html>
