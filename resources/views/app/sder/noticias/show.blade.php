<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/estilos.css', 'resources/css/app.css', 'resources/js/app.js'])
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <title>{{ config('app.name', 'Laravel') }}</title>

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

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        :root {
            scroll-behavior: smooth;
        }
    </style>
    <style>
        .container-viewresolution {
            width: 95%;
            margin-top: 200px;
            margin-bottom: 50px;
            margin-left: 30px;
            background-color: #fff;
            padding: 30px 20px 20px 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .header-viewresolution {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .title-viewresolution {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
        }

        .description-viewresolution {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }

        .download-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .download-btn:hover {
            background-color: #45a049;
            text-decoration: none;
        }

        .pdf-viewer-viewresolution {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio (Responsive for iframe) */
            overflow: hidden;
            margin-bottom: 20px;
        }

        .pdf-iframe-viewresolution {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>


    <style>
        footer {
            background: #04527b;
            padding-bottom: 20px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .contact-us {
            width: 40%;
            color: #fff;
        }

        .brand {
            font-weight: 500;
            font-size: 40px;
        }

        .brand+p {
            font-weight: 500;
        }

        .social-media {
            width: 50%;
            display: flex;
            justify-content: flex-end;
        }

        .social-media-icon {
            display: inline-block;
            margin-left: 20px;
            width: 60px;
            height: 60px;
            border: 1px solid #fff;
            border-radius: 50%;
            text-align: center;
            color: #fff;
        }

        .social-media-icon i {
            font-size: 30px;
            line-height: 60px;
        }

        .line {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            height: 2px;
            background: #fff;
            margin-bottom: 60px;
        }

        .social-media-icon:hover {
            background: #fff;
            color: #04527b;
        }

        .contact-info,
        .social-media {
            flex: 1;
            padding: 0 10px;
            color: white;
        }

        .contact-info p,
        .social-media p {
            margin: 5px 0;
        }

        a {
            color: #00aced;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .box__copyright {
            max-width: 1200px;
            margin: auto;
            text-align: center;
        }

        .box__copyright p {
            color: #7a7a7a;
        }

        .box__copyright hr {
            border: none;
            height: 1px;
            background-color: #7a7a7a;
        }
    </style>
    <!-- Styles -->
    @livewireStyles

</head>

<body>
    <header class="header" id="home">



        @include('layouts.partials.app.navbar', ['name' => $subdireccion->nombre])
        {{-- @include('app.inicio.slider') --}}



    </header>

    <main>


        <div class="container-viewresolution">

            <h1 class="title-viewresolution">
                {{ $noticia->titulo }}
            </h1>

            <!-- <a href="../pdfs/res1.pdf" download class="download-btn"> <i class="fas fa-download"></i></a> -->
            {{-- <span style="color: gray; font-size: 13px;">Publicado: 25 Junio 2024</span> --}}
            <span style="color: gray; font-size: 13px;">
                Publicado: {{ \Carbon\Carbon::parse($noticia->fecha)->locale('es')->translatedFormat('d F Y') }}
            </span>



            {{-- <div class="pdf-viewer-viewresolution" style="margin-top: 30px;">
                <img src="{{$noticia->imagenes->}}" class="pdf-iframe-viewresolution">
            </div> --}}

            <!-- component -->



            {{-- @foreach ($noticia->imagenes as $img) --}}
            <!-- image grid-->
            <div class="grid grid-cols-6 col-span-2 gap-2">



                @foreach ($noticia->images as $imagen)
                    @if ($loop->index == 3)
                        <div class="relative overflow-hidden rounded-xl col-span-2 max-h-[10rem]"
                            onclick="showAllImages()">
                            <div id="more-imgs"
                                class="text-white text-xl absolute inset-0 bg-slate-900/80 flex justify-center items-center cursor-pointer">
                                +{{ count($noticia->images) - 3 }}
                            </div>
                            <img class="img-galeria h-full w-full object-cover"
                                src="{{ asset('img/' . $imagen->path) }}" alt="">
                        </div>
                    @else
                        @if ($loop->index < 4)
                            <div
                                class="overflow-hidden rounded-xl {{ $loop->index == 1 || $loop->index == 2 ? 'col-span-3' : 'col-span-2' }} max-h-[10rem]">
                                <img class="img-galeria h-full w-full object-cover"
                                    src="{{ asset('img/' . $imagen->path) }}" alt="">
                            </div>
                        @else
                            <!-- All other images go here -->
                            <div class="full-gallery hidden overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                                <img class="img-galeria h-full w-full object-cover"
                                    src="{{ asset('img/' . $imagen->path) }}" alt="">
                            </div>
                        @endif
                    @endif
                @endforeach


            </div>

            <div class="imagen-light"
                style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                <img src="{{ asset('img/close.svg') }}" alt="" class="close">
                <img src="" alt="" class="agregar-imagen" style="max-height: 100vh;">
                <p class="imagen-description" style="color:white; text-align: center;"></p>
            </div>
            <div class="imagen-light" style="display: block; text-align: center; ">
                <img src="{{ asset('img/close.svg') }}" alt="" class="close">
                <img src="" alt="" class="agregar-imagen">
                <p class="imagen-description"
                    style="color:white; text-align: center; justify-content: center; align-items: center;"></p>
            </div>


            <p class="description-viewresolution" style="margin-top: 30px;">

                {!! nl2br(e($noticia->descripcion)) !!}

            </p>
        </div>





    </main>

    {{-- @yield('slider') --}}

    {{-- {{ $slot }} --}}

    <div class="fab-container">
        <div class="fab-wrapper">
            <a href="https://wa.me/59171310964" style="display: flex; align-items: center;" class="fab"
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

    @stack('modals')

    <script>
        function showAllImages() {

            // Select all elements with the 'full-gallery' class
            const fullGalleryElements = document.querySelectorAll('.full-gallery');

            // Loop through them and remove the 'hidden' class
            fullGalleryElements.forEach(function(element) {
                element.classList.remove('hidden');
            });

            // Hide the 'more-imgs' element
            document.getElementById('more-imgs').classList.add('hidden');
        }
    </script>

</body>




</html>
