<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ config('app.name', 'SDER') }}</title>

    <link rel="icon" href="{{ asset('favicon_bolivia.png') }}" type="image/x-icon">

    <title>SDER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    


    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>

<body>
   

    <main>
        @yield('content')
    </main>


    @stack('modals')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts

    @stack('js')

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
