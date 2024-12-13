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


        @foreach ($portadas as $portada)
            <a href="{{ $portada->url }}">
                <div class="myslide fade">
                    <img class="img-slider" src="{{ asset($portada->imagen_path) }}">
                </div>
            </a>
        @endforeach
        <div class="myslide fade">
            <div class="txt iframe-container">
                <iframe id="video"
                    src="https://www.youtube.com/embed/gU2vruQcYb8?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="no-referrer" allowfullscreen></iframe>
            </div>
        </div>


        <div class="prev" onclick="plusSlides(-1)">&#10094;</div>
        <div class="next" onclick="plusSlides(1)">&#10095;</div>

        <div class="dotsbox" style="text-align:center">
            @foreach ($portadas as $index => $portada)
                <span class="dot" onclick="currentSlide({{ $index + 1 }})"></span>
            @endforeach
            {{-- If there's an additional slide for the video --}}
            <span class="dot" onclick="currentSlide({{ count($portadas) + 1 }})"></span>
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
