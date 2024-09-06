<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/estilos.css', 'resources/js/app.js'])

    <title>{{ config('app.name', 'SEAE') }}</title>

    <title>SDER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    {{-- <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/equipo-tecnico.css">
    <link rel="stylesheet" href="css/rotating-image-gallery.css">
    <link rel="stylesheet" href="css/news.css"> --}}


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->

    <!-- Styles -->
    @livewireStyles

</head>

<body>
    <header class="header" id="home">



        @include('layouts.partials.app.navbar', ['name' => $unidad->nombre])
        @include('app.seae.inicio.slider')



    </header>

    <main>
        @include('app.seae.inicio.inicio', ['unidad' => $unidad])
        @include('app.seae.inicio.noticias')
        @include('app.seae.inicio.preguntas')
        @include('app.seae.inicio.equipo-tecnico')


    </main>

    {{-- @yield('slider') --}}

    {{-- {{ $slot }} --}}

    <div class="fab-container">
        <div class="fab-wrapper">
            <a href="https://wa.me/59171310964" style="display: flex; align-items: center;" class="fab"
                id="fab1">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <span class="tooltip">Contactar por Whatsapp</span>

        </div>
        <div class="fab-wrapper">
            <a href="{{ route('show-form') }}" class="fab" id="fab2">
                <i class="fab fa-wpforms"></i>
            </a>
            <span class="tooltip">Formulario de Denuncias</span>
        </div>
    </div>
    @include('layouts.partials.app.footer')

    @stack('modals')

    @livewireScripts

    @if (session('swal'))
        <script>
            Swal.fire({!! json_encode(session('swal')) !!});
        </script>
    @endif

    <script>
        Livewire.on('swal', data => {
            Swal.fire(data[0]);
        });
    </script>



</body>




</html>
