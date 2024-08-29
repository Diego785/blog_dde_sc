<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/slider.css'])

</head>

<body>
    <!--=============== HEADER ===============-->
    <div class="slider">

        {{-- <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/banner1.jpg') }}">
        </div> --}}
        <a href="https://evento.minedu.gob.bo/evento/311">
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/img-banners/banner1.jpg') }}">
            </div>
        </a>
        <a href="https://www.minedu.gob.bo/index.php?option=com_content&view=article&id=7476&catid=91&Itemid=933">
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/img-banners/banner2.jpg') }}">
            </div>
        </a>


        <div class="myslide fade">
            <div class="txt iframe-container">
                <iframe id="video"
                    src="https://www.youtube.com/embed/gU2vruQcYb8?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="no-referrer" allowfullscreen></iframe>
            </div>
        </div>
        <a href="https://www.minedu.gob.bo/files/publicaciones/veaye/dgea/Lista_de_centros_de_capacitacion.pdf">
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/img-banners/banner3.jpg') }}">
            </div>
        </a>
        <a href="https://red.minedu.gob.bo/textosAprendizaje">
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/img-banners/banner14.jpg') }}">
            </div>
        </a>
        <a href="https://www.minedu.gob.bo/index.php?option=com_content&view=article&id=7067&catid=90&Itemid=933">
            <div class="myslide fade">
                <img class="img-slider" src="{{ asset('img/img-banners/banner16.jpg') }}">
            </div>
        </a>

        {{-- <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner5.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner6.png') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner7.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner8.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner9.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner10.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner11.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner12.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner13.png') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner14.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner15.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner16.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner17.jpg') }}">
        </div>
        <div class="myslide fade">
            <img class="img-slider" src="{{ asset('img/img-banners/banner18.jpeg') }}">
        </div> --}}
        <div class="prev" onclick="plusSlides(-1)">&#10094;</div>
        <div class="next" onclick="plusSlides(1)">&#10095;</div>

        <div class="dotsbox" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            {{-- <span class="dot" onclick="currentSlide(7)"></span>
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
            <span class="dot" onclick="currentSlide(20)"></span> --}}
        </div>
    </div>
    <script>
        const myslide = document.querySelectorAll('.myslide');
        const dot = document.querySelectorAll('.dot');
        let counter = 1;
        let isVideoPlaying = false; // Track if video is playing
        slidefun(counter);

        let timer = setInterval(autoSlide, 8000);

        function autoSlide() {
            if (!isVideoPlaying) { // Check if the video is playing
                console.log("Auto sliding to next slide");
                counter += 1;
                slidefun(counter);
            }
        }

        function plusSlides(n) {
            counter += n;
            slidefun(counter);
            resetTimer();
        }

        function currentSlide(n) {
            counter = n;
            slidefun(counter);
            resetTimer();
        }

        function resetTimer() {
            clearInterval(timer);
            timer = setInterval(autoSlide, 8000);
        }

        function slidefun(n) {
            let i;
            for (i = 0; i < myslide.length; i++) {
                myslide[i].style.display = "none";
            }
            for (i = 0; i < dot.length; i++) {
                dot[i].className = dot[i].className.replace(' active', '');
            }
            if (n > myslide.length) {
                counter = 1;
            }
            if (n < 1) {
                counter = myslide.length;
            }
            myslide[counter - 1].style.display = "block";
            dot[counter - 1].className += " active";
        }

        // Load YouTube IFrame Player API code asynchronously
        let tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        let firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        let player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('video', {
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerStateChange(event) {
            console.log("Player state changed:", event.data);
            console.log("Playing state:", YT.PlayerState.PLAYING);
            if (event.data == YT.PlayerState.PLAYING) {
                console.log("Video is playing, stopping the slider");
                isVideoPlaying = true; // Video is playing
                clearInterval(timer); // Stop the auto slider
            } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
                console.log("Video is paused or ended, restarting the slider");
                isVideoPlaying = false; // Video is not playing
                resetTimer(); // Restart the auto slider
            }
        }

        // Ensure the API is ready before attaching the event handler
        window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
    </script>

</body>

</html>
