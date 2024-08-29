<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/inicio.css', 'resources/js/app.js'])

</head>

<body>

    <section id="inicio">

        <h2 class="subtitulo" style="margin-top: 3%;">Subdirección de Educación Regular</h2>
        <div style="display: flex; justify-content:center;">
            <li class="card">
                <div class="img"><img src="{{ asset('img/subdirectora2.jpg') }}" class="img-galeria"
                        draggable="false"></div>
                <h2>Lic. Claudia Mariana Arispe Román</h2>
                <span>Sub-directora de Educación Regular</span>
            </li>

            <div class="body-rotating-gallery">

                <div class="box">

                    <span style="--i:1"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad1.jpg') }}"
                            data-description="TALLER REGIONAL DE FORTALECIMIENTO DEL MODELO EDUCATIVO SOCIOCOMUNITARIO PRODUCTIVO Y PREVENCIÓN DE TODO TIPO DE VIOLENCIA EN UNIDADES EDUCATIVAS DEL SER - SEDE ROBORÉ, con la participación de los Distritos Educativos: San José, Puerto Suárez, Puerto Quijarro y Roboré."></span>
                    <span style="--i:2"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad2.jpg') }}"
                            data-description="TALLER REGIONAL DE FORTALECIMIENTO DEL MODELO EDUCATIVO SOCIOCOMUNITARIO PRODUCTIVO Y PREVENCIÓN DE TODO TIPO DE VIOLENCIA EN UNIDADES EDUCATIVAS DEL SER - SEDE SAN IGNACIO DE VELASCO, con la participación de los Distritos Educativos: San Miguel, San Rafael y San Ignacio."></span>
                    <span style="--i:3"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad3.jpg') }}"
                            data-description="𝐌𝐢𝐧𝐢𝐬𝐭𝐞𝐫𝐢𝐨 𝐝𝐞 𝐄𝐝𝐮𝐜𝐚𝐜𝐢ó𝐧 𝐜𝐨𝐧𝐯𝐨𝐜𝐚 𝐚 𝐞𝐬𝐭𝐮𝐝𝐢𝐚𝐧𝐭𝐞𝐬 𝐝𝐞 𝐒𝐞𝐜𝐮𝐧𝐝𝐚𝐫𝐢𝐚 𝐝𝐞 𝐭𝐨𝐝𝐨 𝐞𝐥 𝐩𝐚í𝐬 𝐚 𝐩𝐚𝐫𝐭𝐢𝐜𝐢𝐩𝐚𝐫 𝐞𝐧 𝐥𝐚 𝟏𝟑ª 𝐎𝐥𝐢𝐦𝐩𝐢𝐚𝐝𝐚 𝐂𝐢𝐞𝐧𝐭í𝐟𝐢𝐜𝐚 𝐄𝐬𝐭𝐮𝐝𝐢𝐚𝐧𝐭𝐢𝐥 𝟐𝟎𝟐𝟒"></span>
                    <span style="--i:4"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad4.jpg') }}"
                            data-description="TALLER REGIONAL DE FORTALECIMIENTO DEL MODELO EDUCATIVO SOCIOCOMUNITARIO PRODUCTIVO Y PREVENCIÓN DE TODO TIPO DE VIOLENCIA EN UNIDADES EDUCATIVAS DEL SER - SEDE YAPACANI, con la participación de los Distritos Educativos: San Carlos, Buena Vista, San Juan de Yapacani y Yapacani."></span>
                    <span style="--i:5"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad5.jpg') }}"
                            data-description="Desarrollo del 𝗧𝗼𝗿𝗻𝗲𝗼 𝗱𝗲 𝗥𝗼𝗯ó𝘁𝗶𝗰𝗮 𝗙𝗜𝗥𝗦𝗧 𝗕𝗢𝗟𝗜𝗩𝗜𝗔 𝗿𝘂𝗺𝗯𝗼 𝗮𝗹 𝗙𝗶𝗿𝘀𝘁 𝗚𝗹𝗼𝗯𝗮𝗹 𝗖𝗵𝗮𝗹𝗹𝗲𝗻𝗴𝗲 𝗔𝘁𝗲𝗻𝗮𝘀 – 𝗚𝗿𝗲𝗰𝗶𝗮"></span>
                    <span style="--i:6"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad6.jpg') }}"
                            data-description="Educación Regular presente en la Feria Intersectorial realizado en el Municipio de Cotoca, brindando información y servicio al público"></span>
                    <span style="--i:7"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad7.jpg') }}"
                            data-description="TALLER REGIONAL DE FORTALECIMIENTO DEL MODELO EDUCATIVO SOCIOCOMUNITARIO PRODUCTIVO Y PREVENCIÓN DE TODO TIPO DE VIOLENCIA EN UNIDADES EDUCATIVAS DEL SER con la participación de los Distritos Educativos de Montero, Okinawa, Mineros, General Saavedra, Portachuelo y Santa Rosa de Sara."></span>
                    <span style="--i:8"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad8.jpg') }}"
                            data-description="Lanzamiento de la '2DA OLIMPIADA DE AJEDREZ DEL SISTEMA EDUCATIVO - SANTA CRUZ'"></span>
                    <span style="--i:9"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad9.jpg') }}"
                            data-description="El equipo técnico de la Subdirección de Educación Regular, maestras y maestros del CAIP-AH el día de hoy estuvo presente  en la FERIA INTERINSTITUCIONAL realizada en la Plaza del Mechero, zona Plan 3000, brindando atención y servicio al público."></span>
                    <span style="--i:10"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad10.jpg') }}"
                            data-description="ACTO PROTOCOLAR DE ACREDITACIÓN DE DEFENSORAS Y DEFENSORES ESTUDIANTILES DE SANTA CRUZ 2024"></span>
                    <span style="--i:11"><img class="img-galeria"
                            src="{{ asset('img/img-actividades/actividad11.jpg') }}"
                            data-description="La Subdirección De Educación Regular Santa Cruz participó del ACTO DE PRESENTACIÓN DE LA COLECCIÓN EL PRINCIPITO TRADUCIDO A IDIOMAS ORIGINARIOS realizado por la Editorial del Estado Plurinacional de Bolivia en la 25º FERIA INTERNACIONAL DEL LIBRO DE SANTA CRUZ en instalaciones de FEXCPOCRUZ"></span>
                    
                    <!-- <span style="--i:8"><img class="img-galeria" src="{{ asset('img/img/img-1.jpg') }}"></span>
                    <span style="--i:9"><img class="img-galeria" src="{{ asset('img/img/img-2.jpg') }}"></span>
                    <span style="--i:10"><img class="img-galeria" src="{{ asset('img/img/img-3.jpg') }}"></span> -->
                </div>
            </div>


        </div>


    </section>
    <div class="imagen-light" style="display: block; text-align: center; ">
        <img src="img/close.svg" alt="" class="close">
        <img src="" alt="" class="agregar-imagen">
        <p class="imagen-description"
            style="color:white; text-align: center; justify-content: center; align-items: center;"></p>
    </div>


    <section class="contenedor" id="servicio">
        <div class="contenedor-servicio">

            <div class="tilt-box-wrap"
                style="padding: 15px; display: flex; align-items: center; justify-content: center;">
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
                    <strong>Apoyamos la implantación y funcionamiento del Sistema de Programación de operaciones de
                        manera que
                        se mejore el proceso de formulación de planes y programas de la DDE-SCZ. Asimismo aseguramos
                        el
                        procesamiento de información y análisis sobre la población educativa, infraestructura
                        educativa
                        y formación docente-administrativa, en forma oportuna, confiable y veraz, tanto del área de
                        educación formal como alternativa y consolidar el funcionamiento de núcleos educativos y
                        órganos
                        plurinacionales del Estado Boliviano.</strong>
                </div>
            </div>
            <div class="checklist-servicio">
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
            </div>
        </div>
    </section>


</body>

</html>
