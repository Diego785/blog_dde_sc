<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>
<body>
    <header class="header" id="home">

        <nav>
            <input id="nav-toggle" type="checkbox">
            <div class="logo">
                <!-- <a href="index.html">
                        <img src="img/logo-minedu.png" alt="">
                    </a> -->
                <div class="name-sub">SUBDIRECCION DE EDUCACION REGULAR</div>
            </div>
            <ul class="links">
                <li><a class="link-reference" href="#inicio">Inicio</a></li>
                <li><a class="link-reference" href="#noticias">Noticias</a></li>
                <li><a class="link-reference" href="#questions">Preguntas Frecuentes</a></li>
                <li><a class="link-reference" href="#equipo">Equipo Técnico</a></li>
                <li><a class="link-reference" href="#footer">Contacto</a></li>
                <li><a class="link-reference" href="resoluciones.html">Resoluciones</a></li>
                <li><a class="link-reference" href="formulario.html">Formulario de Denuncias</a></li>
                <li><a class="link-reference" href="ascenso.html">Ascenso de Categoría</a></li>

            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>

        {{-- @include('layouts.partials.app.navbar') --}}
        <div class="slider">
            {{-- <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner1.jpg') }}">
            </div>
    
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner2.jpg') }}">
            </div>
    
     --}}

            <div class="myslide fade">
                <div class="txt iframe-container">
                    <iframe id="video"
                        src="https://www.youtube.com/embed/gU2vruQcYb8?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="no-referrer" allowfullscreen></iframe>

                </div>
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner3.jpg') }}">
            </div>

            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner4.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner5.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner6.png') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner7.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner8.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner9.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner10.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner11.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner12.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner13.png') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner14.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner15.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner16.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner17.jpg') }}">
            </div>
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/banner18.jpeg') }}">
            </div>
            <div class="prev" onclick="plusSlides(-1)">&#10094;</div>
            <div class="next" onclick="plusSlides(1)">&#10095;</div>

            <div class="dotsbox" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
                <span class="dot" onclick="currentSlide(10)"></span>
                <span class="dot" onclick="currentSlide(11)"></span>
                <span class="dot" onclick="currentSlide(12)"></span>
                <span class="dot" onclick="currentSlide(13)"></span>
                <span class="dot" onclick="currentSlide(14)"></span>
                <span class="dot" onclick="currentSlide(15)"></span>
                <span class="dot" onclick="currentSlide(16)"></span>
                <span class="dot" onclick="currentSlide(17)"></span>
                <span class="dot" onclick="currentSlide(18)"></span>
                <span class="dot" onclick="currentSlide(19)"></span>
                <span class="dot" onclick="currentSlide(20)"></span>
            </div>
        </div>

        <!-- Ensure JavaScript functions are accessible -->

    </header>

    {{-- @yield('slider') --}}

    {{-- {{ $slot }} --}}


    {{-- @include('layouts.partials.app.footer') --}}

    @stack('modals')

    @livewireScripts

    <script>
     let tag = document.createElement("script");
        tag.src = "https://www.youtube.com/iframe_api";
        let firstScriptTag = document.getElementsByTagName("script")[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        let player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player("video", {
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                clearInterval(timer);
            }
        }

        // Ensure the API is ready before attaching the event handler
        window.onPlayerStateChange = onPlayerStateChange;
        window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
    </script>
</body>
</html>