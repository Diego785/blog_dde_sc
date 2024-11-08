<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/nav.css', 'resources/js/navs.js'])

    <title>Responsive dropdown menu - Bedimcode</title>
</head>

<body>



    <header class="header">
        <div class="nav-main" style="background-image: url('{{ asset('img/fondo.jpg') }}');">

            <div class="container">
                <div class="header-main">
                    <div class="logo">
                        <a href="{{ route('sder.index') }}">
                            @if (isset($name))
                                {{ $name }}
                            @endif
                        </a>
                    </div>
                    <div class="open-nav-menu">
                        <span></span>
                    </div>
                    <div class="menu-overlay">
                    </div>

                </div>
                <!-- navigation menu start -->
                <nav class="nav-menu">
                    <div class="close-nav-menu">
                        <img src="{{ asset('img/close.svg') }}" alt="close">
                    </div>
                    <ul class="menu">

                        <li class="menu-item">
                            <a href="{{ route('sder.index') }}#inicio">Inicio</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('sder.index') }}#noticias">Noticias</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('sder.index') }}#questions">Preguntas Frecuentes</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('sder.index') }}#equipo">Equipo Técnico</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('sder.index') }}#footer">Contacto</a>
                        </li>

                        <li class="menu-item menu-item-has-children">
                            <a href="{{ route('show-form') }}" data-toggle="sub-menu">Denuncias<i
                                    class="plus"></i></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{ route('show-form') }}">Nueva Denuncia en Educación Regular</a></li>
                                {{-- <li class="menu-item"><a href="{{ route('show-denuncias') }}">Ver Denuncias</a></li> --}}
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('show-bibliografia') }}">Bibliografía</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('show-resoluciones') }}">Resoluciones</a>
                        </li>

                    </ul>
                </nav>
                <!-- navigation menu end -->
            </div>
        </div>

    </header>



    <!--=============== MAIN JS ===============-->
    {{-- <script src="{{asset('js/navs.js')}}"></script> --}}
</body>

</html>
