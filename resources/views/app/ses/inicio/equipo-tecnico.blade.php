<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/equipo-tecnico.css', 'resources/js/equipo-tecnico.js'])

</head>

<body>

    <section id="equipo">
        <h2 class="subtitulo">Equipo Técnico</h2>

        <div class="body-carousel">

            <div class="wrapper-tecnicos">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <ul class="carousel">
                    <li class="card">
                        <div class="img"><img src="{{ asset('img/img-profiles/claudina.jpg') }}" class="img-galeria"
                                draggable="false"></div>
                        <h2>Lic. Claudina Nina Calisaya</h2>
                        <span>Técnica de Educación Inicial en Familia Comunitaria Vocacional</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="" class="img-galeria" draggable="false"></div>
                        <h2>Lic. Verónica Castro Torrez</h2>
                        <span>Técnica de Educación Inicial en Familia Comunitaria Vocacional</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="" class="img-galeria" draggable="false"></div>
                        <h2>Lic. Jessica Kamy Menacho Ramos</h2>
                        <span>Técnica de Educación Primaria Comunitaria Vocacional</span>
                    </li>
                    {{-- <li class="card">
                        <div class="img"><img src="img/img-4.jpg" alt="img" draggable="false"></div>
                        <h2>Lic. Ronald Ruben Colque Choque</h2>
                        <span>Técnica de Educación Primaria Comunitaria Vocacional</span>
                    </li> --}}
                    <li class="card">
                        <div class="img"><img src="{{ asset('img/img-profiles/gloria.jpg') }}" class="img-galeria"
                                draggable="false"></div>
                        <h2>Lic. Gloria Vanesa Ajata Villca</h2>
                        <span>Técnica de Educación Primaria Comunitaria Vocacional</span>
                    </li>
                    <li class="card">
                        <div class="img"><img src="{{ asset('img/img-profiles/lidia2.jpg') }}" class="img-galeria"
                                draggable="false"></div>
                        <h2>Lic. Lidia Soria Terceros</h2>
                        <span>Técnica de Educación Secundaria Comunitaria Vocacional</span>
                    </li>

                    <li class="card">
                        <div class="img"><img src="" class="img-galeria" draggable="false"></div>
                        <h2>Lic. Sherla Rosario Sequeli Potosi</h2>
                        <span>Técnica de Educación Secundaria Comunitaria Vocacional</span>
                    </li>

                    {{-- <li class="card">
                        <div class="img"><img src="img/img-1.jpg" alt="img" draggable="false"></div>
                        <h2>Sra. Karen Garcia Escobar</h2>
                        <span>Secretaria - S.D.E.R</span>
                    </li> --}}
                </ul>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>

        </div>

        <div class="imagen-light" style="display: block; text-align: center; ">
            <img src="{{ asset('img/close.svg') }}" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
            <p class="imagen-description"
                style="color:white; text-align: center; justify-content: center; align-items: center;"></p>
        </div>
    </section>


</body>

</html>
