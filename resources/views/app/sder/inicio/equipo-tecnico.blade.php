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

                    @foreach ($tecnicos as $tecnico)
                    <li class="card">
                        <div class="img"><img src="{{ asset($tecnico->imagen) }}" class="img-galeria"
                                draggable="false"></div>
                        <h2> {{$tecnico->nombre}} </h2>
                        <span>{{$tecnico->cargo}}</span>
                    </li>
                    @endforeach
                   

                    {{-- <li class="card">
                        <div class="img"><img src="img/img-1.jpg" alt="img" draggable="false"></div>
                        <h2>Sra. Karen Garcia Escobar</h2>
                        <span>Secretaria - S.D.E.R</span>
                    </li> --}}
                </ul>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>

        </div>

        
    </section>


</body>

</html>
