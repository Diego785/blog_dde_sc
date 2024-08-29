<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/footer.css', 'resources/js/app.js'])

    <title>Responsive dropdown menu - Bedimcode</title>
</head>

<body>
    <!--=============== FOOTER ===============-->
    <footer id="footer">
        <div class="contenedor footer-content">

            <div style="display: flex; justify-content: center;">
                <img src="{{ asset('img/logo-sder.png')}}" width="100" height="100" />
            </div>

            <div class="contact-info">

                <p><i style="padding-right: 5px;" class="fas fa-map-marker-alt"></i>Calle La Paz # 766, entre Saavedra y, Santa Cruz de la
                    Sierra<br>Santa Cruz, Bolivia</p>
                <p><i style="padding-right: 5px;" class="fas fa-phone"></i><a class="link-footer" href="tel:1234567890">68884508</a></p>
                <p><i style="padding-right: 5px;" class="fas fa-envelope"></i><a class="link-footer"
                        href="subregular@gmail.com.bo">subregular@santacruz-dde.edu.bo</a></p>
            </div>


            <div class="social-media">
                <a href="https://www.facebook.com/subdirecciondeeducacionregularscz?mibextid=ZbWKwL" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                {{-- <a href="#" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="#" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a> --}}
            </div>
        </div>
        <div class="line"></div>
        <div class="box__copyright">
            <p>Todos los derechos reservados © 2024 <b>Dirección Departamental de Educación de Santa Cruz</b></p>
        </div>
    </footer>



</body>

</html>
