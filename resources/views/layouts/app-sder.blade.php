<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/estilos.css', 'resources/js/app.js'])

    <title>{{ config('app.name', 'SDER') }}</title>

    <link rel="icon" href="{{ asset('favicon_bolivia.png') }}" type="image/x-icon">

    <title>SDER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>



    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Scripts -->

    <!-- Styles -->
    @livewireStyles

</head>

<body style="background-image: url('{{ asset('img/chakana-background.png') }}');">
    <header class="header" id="home">



        @include('layouts.partials.app.navbar', ['name' => $unidad->nombre])
        @include('app.sder.inicio.slider')



    </header>

    <main>
        @include('app.sder.inicio.inicio', ['unidad' => $unidad])
        @include('app.sder.inicio.noticias')
        @include('app.sder.inicio.preguntas')
        @include('app.sder.inicio.equipo-tecnico')


    </main>

    {{-- @yield('slider') --}}

    {{-- {{ $slot }} --}}

    <div class="fab-container">
        <div class="fab-wrapper">
            <a href="https://wa.me/59168884508" style="display: flex; align-items: center;" class="fab"
                id="fab1">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <span class="tooltip">Contactar</span>

        </div>
        <div class="fab-wrapper">
            <a href="{{ route('show-form') }}" class="fab" id="fab2">
                <i class="fab fa-wpforms"></i>
            </a>
            <span class="tooltip">Denunciar</span>
        </div>
    </div>
    @include('layouts.partials.app.footer')

    {{-- @stack('modals')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('js') --}}

    @livewireScripts


    {{-- @if (session('swal'))
        <script>
            Swal.fire(@json(session('swal')));
        </script>
    @endif --}}

    @if (session('swal'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire(@json(session('swal'))).then(() => {
                    // Redirect to the same page to clear the session
                    window.location.href = "{{ url()->current() }}";
                });
            });
        </script>
    @endif


    <script>
        Livewire.on('swal', data => {
            Swal.fire(data[0]);
        });
    </script>




</body>




</html>
