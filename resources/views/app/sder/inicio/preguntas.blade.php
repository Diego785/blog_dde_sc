<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/preguntas.css', 'resources/js/questions.js'])

</head>

<body>

    <section class="questions contenedor" id="questions">
        <h2 class="subtitulo">Preguntas Frecuentes</h2>

        <section class="questions__container">
            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 style="padding: 10px 0; justify-content: space-between;" class="questions__title">¿Cómo
                        descargo los certificados digitales?
                        <span class="questions__arrow">
                            <img src="img/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">
                        En atención a su consulta, sobre la descarga del certificado de los eventos realizados por
                        el Ministerio de Educación, ingrese a los siguientes enlaces:
                        <br>
                        (EVENTOS)
                        <br>
                        <a href="http://evento.minedu.gob.bo/">
                            http://evento.minedu.gob.bo/
                        </a>
                        <br>
                        (PORTAL DE CERTIFICADOS DIGITALES)
                        <br>
                        <a
                            href="https://certificados.minedu.gob.bo/login">https://certificados.minedu.gob.bo/login</a>
                        <br>
                        Para descargar su certificado, debe introducir de manera correcta su número de cédula de
                        Identidad, que fue ingresado a momento de su inscripción.
                        <br>
                        Agradecemos su atención.
                    </p>
                </div>
            </article>

            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 style="padding: 10px 0; justify-content: space-between;" class="questions__title">¿Qué
                        servicios me ofrece la Dirección Departamental de Educación de Santa Cruz?
                        <span class="questions__arrow">
                            <img src="img/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">
                        Servicios de la Dirección Departamental de Educación de Santa Cruz:
                        <br>
                        <a
                            href="http://santacruz-dde.edu.bo/tramite/tramites.php">http://santacruz-dde.edu.bo/tramite/tramites.php</a>
                        <br>
                        Para que pueda revisar los requisitos y elegir en el buscador el trámite solicitado
                        (Legalizaciones, Reimpresiones, Rectificaciones, Convalidaciones, Reposiciones, Certificados
                        y otros)
                        <br>
                        Agradecemos su atención.
                    </p>
                </div>
            </article>

            {{-- <article class="questions__padding">
                <div class="questions__answer">
                    <h3 style="padding: 10px 0; justify-content: space-between;" class="questions__title">¿Cómo
                        realizo el trámite sobre la apostilla del diploma de bachiller?
                        <span class="questions__arrow">
                            <img src="img/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">
                        Ministerio de Educación a su servicio. En atención a su consulta sobre el trámite de
                        APOSTILLA DEL DIPLOMA DE BACHILER, para proceder le sugerimos realizar lo siguiente:
                        <br>
                        1. Solicitar información sobre los requisitos, para la legalización de su Diploma de
                        Bachiller ante la Dirección Departamental de Educación, del Departamento donde realizó sus
                        estudios.
                        <br>
                        2. Una vez tenga el Diploma de Bachiller legalizado con la firma del Director/a
                        Departamental de Educación, debe legalizar el Diploma de Bachiller por el Ministerio de
                        Educación.
                        <br>
                        3. Después de legalizado por el Ministerio de Educación debe digitalizar sus documentos.
                        (Escanear sus documentos)
                        <br>
                        4. Ingresar a la página web: apostilla.rree.gob.bo (SOLICITAR APOSTILLA) y con el código
                        creado puede verificar el estado de su trámite.
                        <br>
                        5. Con el documento original, documento escaneado y código de Apostilla debe dirigirse al
                        Ministerio de Educación, para que sus documentos sean ingresados al SISTEMA INTEGRADO de
                        Apostilla.
                        <br>
                        6. Diríjase al Ministerio de Relaciones Exteriores para la verificación del documento y su
                        emisión correspondiente de su Apostilla.
                        <br>
                        7. Para mayor información le solicitamos visitar la página web:
                        <a
                            href="http://www.cancilleria.gob.bo/apostilla/">http://www.cancilleria.gob.bo/apostilla/</a>
                        <br>
                        8. También puede contactarse al correo electrónico
                        <a href="mailto:apostilla@rree.gob.bo">apostilla@rree.gob.bo</a>, la línea gratuita
                        800106700 o al teléfono 2408900 Int 4011.
                        <br>
                        Agradecemos su atención.
                    </p>
                </div>
            </article> --}}


            {{-- <article class="questions__padding">
                <div class="questions__answer">
                    <h3 style="padding: 10px 0; justify-content: space-between;" class="questions__title">¿Cómo
                        ingreso mis documentos al sistema Apostilla?
                        <span class="questions__arrow">
                            <img src="img/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">
                        PROCEDIMIENTO PARA EL INGRESO DE DOCUMENTOS AL SISTEMA INTEGRADO DE LA APOSTILLA, debe
                        realizar lo siguiente:

                        <br>
                        1. Certificar los documentos por el Ministerio de Educación en ventanillas de Atención al
                        Público u Oficinas Regionales.
                        <br>
                        2. Hacer la solicitud mediante la página de cancillería:
                        <a href="https://apostilla.rree.gob.bo/#/">https://apostilla.rree.gob.bo/#/</a>.
                        <br>
                        3. Una vez recogida la documentación de las ventanillas de Atención al Publico u Oficinas
                        Regionales del País, el usuario deberá digitalizar cada documento a blanco y negro en
                        formato PDF que sea legible y nítida que pese menos de 10 megas.
                        <br>
                        4. Grabar en un CD o memoria USB y apersonarse a ventanilla de Plataforma u Oficinas
                        Regionales del país con el respectivo CD o USB acompañados de los documentos físicos.
                        <br>
                        5. El seguimiento se deberá realizar mediante página web en el lapso de 24 horas
                        aproximadamente con el código generado en el momento de realizar la solicitud, una vez que
                        aparece Firmado por la Entidad, podrá realizar el seguimiento por la página de la Apostilla.
                        <br>
                        Para mayor información puede llamar al teléfono: 2-2442144 Interno: 211 o 348.
                        <br>
                        Agradecemos su atención.
                    </p>
                </div>
            </article> --}}
            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 style="padding: 10px 0; justify-content: space-between;" class="questions__title">¿Qué
                        requisitos necesito para recibir el bono Juancito Pinto?
                        <span class="questions__arrow">
                            <img src="img/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">
                        El titular de cobro de los estudiantes beneficiarios debe estar
                        habilitado en la Base de Datos del Ministerio de Educación y presentar su cédula de
                        identidad más una fotocopia en la entidad financiera, al momento del cobro.
                    </p>
                </div>
            </article>
            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 style="padding: 10px 0; justify-content: space-between;" class="questions__title">¿Quiénes
                        reciben el beneficio del Bono Juancito Pinto?
                        <span class="questions__arrow">
                            <img src="img/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">
                        Los beneficiarios del Bono Juancito Pinto son estudiantes del Subsistema de Educación
                        Regular y Educación Especial, bajo las siguientes consideraciones:
                        <br>
                        SUBSISTEMA DE EDUCACIÓN REGULAR: Las y los estudiantes que se encuentran matriculados y
                        cursando el Nivel de Educación Primaria Comunitaria Vocacional o el Nivel de Educación
                        Secundaria Comunitaria Productiva, en las Unidades Educativas Fiscales y de Convenio, en
                        todo el Estado Plurinacional de Bolivia, que correspondan al Subsistema de Educación
                        Regular.
                        <br>
                        SUBSISTEMA DE EDUCACIÓN ALTERNATIVA Y ESPECIAL / ÁMBITO DE EDUCACIÓN ESPECIAL: Estudiantes
                        con Discapacidad, matriculados en modalidad directa de Centros de Educación Especial
                        Fiscales y de Convenio y Estudiantes del “Programa de Educación Sociocomunitaria en Casa
                        para Personas con Discapacidad” prohibiéndose cobrar este beneficio en dos o más
                        instituciones educativas simultáneamente.
                        <br>
                        Con el propósito de resolver cualquier duda sobre el pago del Bono Juancito Pinto, el
                        Ministerio de Educación habilitó la línea gratuita 800 10 3223.
                        <br>
                        Asimismo, los padres de familia también pueden verificar si el estudiante o el tutor está
                        habilitado para el pago del incentivo escolar en la página web:
                        <a href="http://consultabjp.minedu.gob.bo/">http://consultabjp.minedu.gob.bo/</a>

                    </p>
                </div>
            </article>
        </section>

    </section>


</body>

</html>
