<x-main-layout>
    <div style="display: flex; align-items: center; height: 100vh; overflow: hidden;">
        <div class="image-list" style="margin-top: 175px; padding-left: 20px;">
            <a href="http://educa.minedu.gob.bo/">
                <img src="{{asset('img/plataforma-educativa.jpg')}}" alt="Image 1" class="image-item" style="width: 200px; height: auto;">
            </a>

            <a href="https://sisep.minedu.gob.bo/">
                <img src="{{asset('img/ugpsep.png')}}" alt="Image 2" class="image-item" style="width: 200px; height: auto;">
            </a>
            <a href="https://apostilla.rree.gob.bo/">
                <img src="{{asset('img/apostilla.png')}}" alt="Image 3" class="image-item" style="width: 200px; height: auto;">
            </a>
        </div>
        <div class="slideshow-container" style="flex-grow: 1; height: 100%;">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img class="img-slider" src="{{ asset('img/qr-dde.jpg') }}" style="width:100%">
                <div class="text">Caption Text</div>
            </div>
            <div class="mySlides fade" style="height: 100%;">
                <div class="numbertext">2 / 3</div>
                <iframe style="width: 100%; height: 100%;"
                    src="https://www.youtube.com/embed/gU2vruQcYb8?si=lkiXmUTyabN7i3TW" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
                <div class="text">Caption Two</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img class="img-slider" src="{{ asset('img/estudiantes-dde.jpeg') }}" style="width:100%">
                <div class="text">Caption Three</div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</x-main-layout>
