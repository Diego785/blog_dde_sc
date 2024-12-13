<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/inicio.css', 'resources/js/app.js'])

</head>

<body>

    <section id="inicio">

        <h2 class="subtitulo">{{ $unidad->nombre }}</h2>
        <div style="display: flex; justify-content:center;">
            <li class="card">
                <div class="img"><img src="{{ asset($unidad->perfil_jefe_path) }}" class="img-galeria"
                        draggable="false"></div>
                <h2>{{ $unidad->jefe }}</h2>
                <span>{{ $unidad->cargo }}</span>
            </li>

            <div class="body-rotating-gallery">

                <div class="box">

                    @foreach ($actividades as $index => $actividad)

                        <span style="--i:{{ $index }}"><img class="img-galeria"
                                src="{{ asset($actividad->imagen_path) }}"
                                data-description="{{ $actividad->description }}"></span>
                    @endforeach
                   
                    <!-- <span style="--i:8"><img class="img-galeria" src="{{ asset('img/img/img-1.jpg') }}"></span>
                    <span style="--i:9"><img class="img-galeria" src="{{ asset('img/img/img-2.jpg') }}"></span>
                    <span style="--i:10"><img class="img-galeria" src="{{ asset('img/img/img-3.jpg') }}"></span> -->
                </div>
            </div>


        </div>


    </section>



    <section class="contenedor w-full" id="servicio">
        <div class="contenedor-servicio">

            <div class="tilt-box-wrap"
                style="display: flex; align-items: center; justify-content: center;">
                <span class="t_over"></span>
                <span class="t_over"></span>
                <span class="t_over"></span>
                <span class="t_over"></span>
                <span class="t_over"></span>
                <span class="t_over"></span>
                <span class="t_over"></span>
                <span class="t_over"></span>
                <span class="t_over"></span>
                <div class="tilt-box"
                    style="
                    border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform-style: preserve-3d;
            transition: transform 0.6s;
            background: linear-gradient(135deg, #001a49 0%, #00a7ff 100%);
            color: white;">
                    <strong>{{ $unidad->objetivo }}</strong>
                </div>
            </div>
            {{-- <div class="checklist-servicio">
                <div class="service">
                    <h3 class="n-service"><span class="number">1</span>Misión</h3>
                    <p style="font-style: italic;">
                        Cumplir y hacer cumplir las políticas y normas que en materia de educación establezca el
                        Ministerio de Educación, así como las emitidas por la administración departamental en el
                        ámbito de su competencia.</p>
                </div>
                <div class="service">
                    <h3 class="n-service"><span class="number">2</span>Visión</h3>
                    <p style="font-style: italic;"> Lograr ciudadanos (as) con capacidades potenciales a través de
                        la articulación de la educación científica, humanística, técnica y tecnológica,
                        desarrollando saberes y conocimientos que contribuyan al crecimiento y estabilidad económica
                        de la sociedad.</p>
                </div>
            </div> --}}
        </div>
    </section>

    <div class="imagen-light" style="display: block; text-align: center; ">
        <img src="{{ asset('img/close.svg') }}" alt="" class="close">
        <img src="" alt="" class="agregar-imagen">
        <p class="imagen-description"
            style="color:white; text-align: center; justify-content: center; align-items: center;"></p>
    </div>


</body>

</html>
