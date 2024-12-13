<?php

namespace Database\Seeders;

use App\Models\Noticia;
use App\Models\NoticiaImagen;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    public static $sder_new1, $sder_new2, $sder_new3, $sder_new4, $sder_new5, $sder_new6, $sder_new7, $sder_new8, $sder_new9, $sder_new10, $sder_new11, $sder_new12;

    /**
     * Run the database seeds.
     */



    public function run(): void
    {

        // //NOTICIA 14/08/2024 - 1

        // self::$sder_new1 = Noticia::create([
        //     'titulo' => 'Desarrollo de ENCUENTROS DISTRITALES en  los Distritos Educativos del Departamento de Santa Cruz',
        //     'descripcion' => "Desarrollo de ENCUENTROS DISTRITALES en  los Distritos Educativos del Departamento de Santa Cruz",
        //     'fecha' => Carbon::create(2024, 8, 14),
        //     'hora' => '23:00:00',
        //     'portada_path' => 'noticias/sder/14_08_2024_1.jpg',
        // ]);

        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_1.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_2.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_3.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_4.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_5.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_6.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_7.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_8.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_9.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/14_08_2024_10.jpg',
        //     'noticia_id' => self::$sder_new1->id,
        // ]);



        // //NOTICIA 11/08/2024 - 2

        // self::$sder_new2 = Noticia::create([
        //     'titulo' => 'Inauguracion del 𝟯𝗲𝗿 𝗘𝗻𝗰𝘂𝗲𝗻𝘁𝗿𝗼 𝗱𝗲 𝗲𝘀𝘁𝘂𝗱𝗶𝗮𝗻𝘁𝗲𝘀 𝗰𝗼𝗻 𝗽𝗿𝗼𝗱𝘂𝗰𝘁𝗼𝘀, 𝗵𝗮𝗯𝗶𝗹𝗶𝗱𝗮𝗱𝗲𝘀 𝘆 𝘁𝗮𝗹𝗲𝗻𝘁𝗼 𝗲𝘅𝘁𝗿𝗮𝗼𝗿𝗱𝗶𝗻𝗮𝗿𝗶𝗼 “𝗗𝗲𝘀𝗰𝘂𝗯𝗿𝗶𝗲𝗻𝗱𝗼 𝗧𝗮𝗹𝗲𝗻𝘁𝗼𝘀”',
        //     'descripcion' => "El ministro de Educación, Omar Veliz Ramos, inauguró el 𝟯𝗲𝗿 𝗘𝗻𝗰𝘂𝗲𝗻𝘁𝗿𝗼 𝗱𝗲 𝗲𝘀𝘁𝘂𝗱𝗶𝗮𝗻𝘁𝗲𝘀 𝗰𝗼𝗻 𝗽𝗿𝗼𝗱𝘂𝗰𝘁𝗼𝘀, 𝗵𝗮𝗯𝗶𝗹𝗶𝗱𝗮𝗱𝗲𝘀 𝘆 𝘁𝗮𝗹𝗲𝗻𝘁𝗼 𝗲𝘅𝘁𝗿𝗮𝗼𝗿𝗱𝗶𝗻𝗮𝗿𝗶𝗼 “𝗗𝗲𝘀𝗰𝘂𝗯𝗿𝗶𝗲𝗻𝗱𝗼 𝗧𝗮𝗹𝗲𝗻𝘁𝗼𝘀”.\n\nEste encuentro es el resultado de un arduo #proceso de selección en unidades educativas, distritos y departamentos, destacando a los mejores #talentos de todo el país, donde los estudiantes mostraron sus #proyectos, innovaciones y creaciones que fueron evaluadas por un jurado especializado.\n\nEste evento es un claro ejemplo del compromiso del Ministerio de Educación por descubrir, incentivar y fortalecer el talento extraordinario de los educandos, contribuyendo así al desarrollo del Sistema Educativo Plurinacional.\n🛰 #EducaciónInforma",
        //     'fecha' => Carbon::create(2024, 8, 11),
        //     'hora' => '12:30:00',
        //     'portada_path' => 'noticias/sder/11_08_2024_1.jpg',
        // ]);

        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_1.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_2.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_3.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_4.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_5.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_6.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_7.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_8.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_9.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/11_08_2024_10.jpg',
        //     'noticia_id' => self::$sder_new2->id,
        // ]);

        // //NOTICIA 10/08/2024 - 3

        // self::$sder_new3 = Noticia::create([
        //     'titulo' => 'Participación en la Feria Multisectorial D-5',
        //     'descripcion' => "Participación en la Feria Multisectorial D-5",
        //     'fecha' => Carbon::create(2024, 8, 10),
        //     'hora' => '12:00:00',
        //     'portada_path' => 'noticias/sder/10_08_2024_1.jpg',
        // ]);

        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/10_08_2024_1.jpg',
        //     'noticia_id' => self::$sder_new3->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/10_08_2024_2.jpg',
        //     'noticia_id' => self::$sder_new3->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/10_08_2024_3.jpg',
        //     'noticia_id' => self::$sder_new3->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/10_08_2024_4.jpg',
        //     'noticia_id' => self::$sder_new3->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/10_08_2024_5.jpg',
        //     'noticia_id' => self::$sder_new3->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/10_08_2024_6.jpg',
        //     'noticia_id' => self::$sder_new3->id,
        // ]);

        // //NOTICIA 08/08/2024 - 4

        // self::$sder_new4 = Noticia::create([
        //     'titulo' => 'Desarrollo de ENCUENTROS DISTRITALES en  los Distritos Educativos del Departamento de Santa Cruz',
        //     'descripcion' => "Desarrollo de ENCUENTROS DISTRITALES en  los Distritos Educativos del Departamento de Santa Cruz",
        //     'fecha' => Carbon::create(2024, 8, 8),
        //     'hora' => '08:09:00',
        //     'portada_path' => 'noticias/sder/08_08_2024_1.jpg',
        //     'unidad_id' => 1,
        // ]);

        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_1.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_2.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_3.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_4.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_5.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_6.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_7.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_8.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_9.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_10.jpg',
        //     'noticia_id' => self::$sder_new4->id,
        // ]);

        // //NOTICIA 08/08/2024 - 5

        // self::$sder_new5 = Noticia::create([
        //     'titulo' => 'Feria Interinstitucional de la Villa Primero de Mayo',
        //     'descripcion' => "La Subdirección de Educación Regular participó en la  Feria Interinstitucional de la Villa Primero de Mayo permitiendo la atención directa al público",
        //     'fecha' => Carbon::create(2024, 8, 8),
        //     'hora' => '06:34:00',
        //     'portada_path' => 'noticias/sder/08_08_2024_2_1.jpg',
        // ]);

        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_2_1.jpg',
        //     'noticia_id' => self::$sder_new5->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/08_08_2024_2_2.jpg',
        //     'noticia_id' => self::$sder_new5->id,
        // ]);

        // //NOTICIA 06/08/2024 - 6
        // self::$sder_new6 = Noticia::create([
        //     'titulo' => 'Homenaje Civico en conmemoración a los 199 años de festa libertaria del Estado Plurinacional de Bolivia.',
        //     'descripcion' => "199 AÑOS DE INDEPENDENCIA, HOY MÁS QUE NUNCA COMPROMETIDOS CON LA EDUCACIÓN DE SANTA CRUZ\nLa Dirección Departamental de Educación de Santa Cruz agradece la participación de las Unidades Educativas, Institutos Técnicos e Instituciones que participaron del Homenaje Civico en conmemoración a los 199 años de festa libertaria del Estado Plurinacional de Bolivia.\nAgradecemos el esfuerzo y apoyo de los estudiantes, maestros, directores y los distritos educativos de Santa Cruz 1, 2, 3 y Plan 3000.\n#felicidadesBolivia\n#ComprometidosConLaEducacion",
        //     'fecha' => Carbon::create(2024, 8, 6),
        //     'hora' => '12:23:00',
        //     'portada_path' => 'noticias/sder/06_08_2024_1.jpg',
        //     'unidad_id' => 1,
        // ]);


        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_1.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_2.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_3.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_4.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_5.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_6.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_7.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_8.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_9.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);
        // NoticiaImagen::create([
        //     'path' => 'noticias/sder/06_08_2024_10.jpg',
        //     'noticia_id' => self::$sder_new6->id,
        // ]);

        //NOTICIA 06/12/2024 - 7
        self::$sder_new7 = Noticia::create([
            'titulo' => "Reconocimiento a la Ministra Esperanza Guevara con la Condecoración al Mérito Educativo y Galardón '𝐏𝐫𝐨𝐟𝐞𝐬𝐨𝐫𝐚 𝐆𝐥𝐚𝐝𝐲𝐬 𝐑𝐢𝐯𝐞𝐫𝐨 𝐝𝐞 𝐉𝐢𝐦𝐞𝐧𝐞𝐳'",
            'descripcion' => "Reconocimiento a la Ministra Esperanza Guevara con la Condecoración al Mérito Educativo y Galardón '𝐏𝐫𝐨𝐟𝐞𝐬𝐨𝐫𝐚 𝐆𝐥𝐚𝐝𝐲𝐬 𝐑𝐢𝐯𝐞𝐫𝐨 𝐝𝐞 𝐉𝐢𝐦𝐞𝐧𝐞𝐳'. Durante su visita a Santa Cruz, la Ministra de Culturas, Descolonización y Despatriarcalización, Esperanza Guevara, fue distinguida con la Condecoración al Mérito Educativo y el Galardón 'Profesora Gladys Rivero de Jiménez', mediante la Resolución Administrativa SC N° 543/2024. Esta distinción fue otorgada por el Director Departamental de Educación, Nelson Nery Alcocer, en reconocimiento a su valioso aporte y apoyo al desarrollo de la educación en Bolivia. Este homenaje resalta el incansable trabajo de la Ministra Guevara en la promoción de una educación intercultural, inclusiva y libre de colonialismos, y en su esfuerzo por garantizar el acceso a la cultura y el conocimiento para todos los bolivianos. Su gestión continúa siendo un pilar fundamental en la transformación del sistema educativo del país. Su labor sigue dejando una huella imborrable en la educación boliviana.",
            'fecha' => Carbon::create(2024, 12, 7),
            'hora' => '12:23:00',
            'portada_path' => 'img/noticias/sder/7/06_12_2024_1.jpg',
            'unidad_id' => 1,
        ]);

        NoticiaImagen::create([
            'path' => 'img/noticias/sder/7/06_12_2024_1.jpg',
            'noticia_id' => self::$sder_new7->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/7/06_12_2024_2.jpg',
            'noticia_id' => self::$sder_new7->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/7/06_12_2024_3.jpg',
            'noticia_id' => self::$sder_new7->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/7/06_12_2024_4.jpg',
            'noticia_id' => self::$sder_new7->id,
        ]);


        //NOTICIA 09/12/2024 - 8
        self::$sder_new8 = Noticia::create([
            'titulo' => "🇧🇴🇧🇴🇧🇴🇧🇴¡𝙁𝙚𝙡𝙞𝙘𝙞𝙙𝙖𝙙𝙚𝙨 𝙖 𝙣𝙪𝙚𝙨𝙩𝙧𝙤𝙨 𝙖𝙩𝙡𝙚𝙩𝙖𝙨! 🇧🇴🇧🇴🇧🇴🇧🇴",
            'descripcion' => "🇧🇴🇧🇴🇧🇴🇧🇴¡𝙁𝙚𝙡𝙞𝙘𝙞𝙙𝙖𝙙𝙚𝙨 𝙖 𝙣𝙪𝙚𝙨𝙩𝙧𝙤𝙨 𝙖𝙩𝙡𝙚𝙩𝙖𝙨! 🇧🇴🇧🇴🇧🇴🇧🇴
Queremos expresar nuestro más sincero agradecimiento y reconocimiento a todos nuestros atletas que han clasificado en la fase departamental de los Juegos Deportivos Estudiantiles 12-14 años y que, con esfuerzo y dedicación, han pasado a la fase nacional que se desarolló en la ciudad de Sucre del 06 al 09 de diciembre de 2024. ⚽🏀
 Agradecemos profundamente su esfuerzo, disciplina y el compromiso demostrado para representar a nuestro departamento en este evento tan importante, donde estudiantes de todo el país se dierón cita para competir y compartir experiencias.
Gracias también a las Unidades Educativas que han apoyado a sus atletas, brindando todo lo necesario para su preparación. Este es solo el inicio de un gran camino para cada uno de nuestros deportistas.
¡COMPROMETIDSO CON LA EDUCACIÓN! ",
            'fecha' => Carbon::create(2024, 12, 9),
            'hora' => '12:23:00',
            'portada_path' => 'img/noticias/sder/8/09_12_2024_1.jpg',
            'unidad_id' => 1,
        ]);

        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_1.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_2.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_3.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_4.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_5.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_6.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_7.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_8.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_9.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/8/09_12_2024_10.jpg',
            'noticia_id' => self::$sder_new8->id,
        ]);

        //NOTICIA 10/12/2024 - 9
        self::$sder_new9 = Noticia::create([
            'titulo' => "Premiación del Segundo Concurso Nacional de Ensayo Narrativo 'Conoce Nuestro Patrimonio' Rumbo al Bicentenario ",
            'descripcion' => "Premiación del Segundo Concurso Nacional de Ensayo Narrativo 'Conoce Nuestro Patrimonio' Rumbo al Bicentenario 
¡𝗙𝗲𝗹𝗶𝗰𝗶𝘁𝗮𝗰𝗶𝗼𝗻𝗲𝘀 𝗮 𝗹𝗼𝘀 𝗴𝗮𝗻𝗮𝗱𝗼𝗿𝗲𝘀 𝗱𝗲𝗹 𝗗𝗲𝗽𝗮𝗿𝘁𝗮𝗺𝗲𝗻𝘁𝗼 𝗱𝗲 𝗦𝗮𝗻𝘁𝗮 𝗖𝗿𝘂𝘇❗
Lucymar Justiniano Arauz
Obra: *Patrimonio cultural boliviano: el Tacú, herencia y tradición
cruceña* de la UE.: San Francisco Xavier del Municipio de OKINAWA
Anabel Villagómez Mariscal
Obra: *El legado, la viudita* de la UE.: Adrian Melgar y Montaño del municipio de POSTRERVALLE 
Nazaret del Carmen Viveros Sagardia
Obra: *Mitos y leyendas de las naciones o pueblos originarios campesinos* de la UE.: Niño Jesus del Municipio Camiri
Geraldine Velásquez Pizarroso
Obra: *La participación de las mujeres en la historia de Bolivia y su Bicentenario* de la UE. Simon Bolivar del Munivipio de CAMIRI 
Ani Yoli Vargas 
Obra: *ResiResistencia, tradiciones y costumbres de mi pueblo
Yuracare* de la UE. Ciro Mealla del Municipio de SAN JULIAN 
A continuación, algunas fotos del evento de premiación:",
            'fecha' => Carbon::create(2024, 12, 10),
            'hora' => '09:47:00',
            'portada_path' => 'img/noticias/sder/9/10_12_2024_1.jpg',
            'unidad_id' => 1,
        ]);

        NoticiaImagen::create([
            'path' => 'img/noticias/sder/9/10_12_2024_1.jpg',
            'noticia_id' => self::$sder_new9->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/9/10_12_2024_2.jpg',
            'noticia_id' => self::$sder_new9->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/9/10_12_2024_3.jpg',
            'noticia_id' => self::$sder_new9->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/9/10_12_2024_4.jpg',
            'noticia_id' => self::$sder_new9->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/9/10_12_2024_5.jpg',
            'noticia_id' => self::$sder_new9->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/9/10_12_2024_6.jpg',
            'noticia_id' => self::$sder_new9->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/9/10_12_2024_7.jpg',
            'noticia_id' => self::$sder_new9->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/9/10_12_2024_8.jpg',
            'noticia_id' => self::$sder_new9->id,
        ]);


        //NOTICIA 10/12/2024 - 10
        self::$sder_new10 = Noticia::create([
            'titulo' => "¡Felicitaciones a nuestros campeones del ajedrez!",
            'descripcion' => "¡Felicitaciones a nuestros campeones del ajedrez! 
Caely Dilda El Hage Serrano y Yonathan Magne Alcoba, Ambos jóvenes han demostrado su brillantez en la disciplina de ajedrez y han puesto en alto a Santa Cruz 
   Caely Dilda El Hage Serrano 
1 Oro en Ajedrez
   Yonathan Magne Alcoba
1 Plata en Ajedrez
Gran trabajo, concentración y estrategia ¡Que estos logros sean solo el comienzo de una brillante trayectoria en el mundo del ajedrez! 
Santa Cruz sigue brillando gracias a su esfuerzo y pasión.",
            'fecha' => Carbon::create(2024, 12, 10),
            'hora' => '16:08:00',
            'portada_path' => 'img/noticias/sder/10/10_12_2024_1.jpg',
            'unidad_id' => 1,
        ]);

        NoticiaImagen::create([
            'path' => 'img/noticias/sder/10/10_12_2024_1.jpg',
            'noticia_id' => self::$sder_new10->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/10/10_12_2024_2.jpg',
            'noticia_id' => self::$sder_new10->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/10/10_12_2024_3.jpg',
            'noticia_id' => self::$sder_new10->id,
        ]);


        //NOTICIA 10/12/2024 - 11
        self::$sder_new11 = Noticia::create([
            'titulo' => "𝙀𝙫𝙖𝙡𝙪𝙖𝙘𝙞𝙤́𝙣 𝙙𝙚𝙡 𝙎𝙞𝙨𝙩𝙚𝙢𝙖 𝙋𝙡𝙪𝙧𝙞𝙣𝙖𝙘𝙞𝙤𝙣𝙖𝙡 𝙙𝙚 𝘾𝙚𝙧𝙩𝙞𝙛𝙞𝙘𝙖𝙘𝙞𝙤́𝙣 𝙚𝙣 𝙂𝙪𝙞́𝙖 𝙙𝙚 𝙈𝙤𝙣𝙩𝙖𝙣̃𝙖 🌄",
            'descripcion' => "𝙀𝙫𝙖𝙡𝙪𝙖𝙘𝙞𝙤́𝙣 𝙙𝙚𝙡 𝙎𝙞𝙨𝙩𝙚𝙢𝙖 𝙋𝙡𝙪𝙧𝙞𝙣𝙖𝙘𝙞𝙤𝙣𝙖𝙡 𝙙𝙚 𝘾𝙚𝙧𝙩𝙞𝙛𝙞𝙘𝙖𝙘𝙞𝙤́𝙣 𝙚𝙣 𝙂𝙪𝙞́𝙖 𝙙𝙚 𝙈𝙤𝙣𝙩𝙖𝙣̃𝙖 🌄
Se vivió una jornada de gran relevancia y dedicación en el ámbito del Sistema Plurinacional de Certificación por Competencias En Guía de Montaña, Gracias a los 22 participantes...
 El proceso de certificación por competencias en Guía de Montaña consta:
Orientación en montaña
Técnicas de rescate y seguridad
Conocimiento de rutas y geografia
Atención y liderazgo de grupos
Primeros auxiliares en ambientes naturales.",
            'fecha' => Carbon::create(2024, 12, 10),
            'hora' => '17:15:00',
            'portada_path' => 'img/noticias/sder/11/10_12_2024_1.jpg',
            'unidad_id' => 1,
        ]);

        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_1.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_2.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_3.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_4.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_5.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_6.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_7.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_8.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_9.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/11/10_12_2024_10.jpg',
            'noticia_id' => self::$sder_new11->id,
        ]);

        //NOTICIA 11/12/2024 - 12
        self::$sder_new12 = Noticia::create([
            'titulo' => "¡Diplomas de Bachilleres de la Gestión 2024! ",
            'descripcion' => "¡Diplomas de Bachilleres de la Gestión 2024! 
Informamos que el proceso de impresión de los diplomas de Bachilleres de la Gestión 2024 en la Dirección Departamental de Educación se ha llevado a cabo bajo un cronograma que comenzó el 21 de noviembre y finalizó el 6 de diciembre.
Durante este período, los 54 distritos educativos del departamento tuvieron acceso a la impresión de un total de 46,852 diplomas, de los cuales 40,942 están destinados a la educación regular y 5,910 a la educación alternativa.
Reiteramos que estos diplomas son totalmente gratuitos y deben ser entregados a cada bachiller junto con una fotocopia legalizada del mismo. Es importante destacar que estos diplomas no deben ser retenidos bajo ningún argumento, tanto a los estudiantes como a los padres.
¡Gracias por su colaboración y apoyo continuo para garantizar la entrega de estos documentos tan importantes para nuestros estudiantes!",
            'fecha' => Carbon::create(2024, 12, 10),
            'hora' => '17:15:00',
            'portada_path' => 'img/noticias/sder/12/11_12_2024_1.jpg',
            'unidad_id' => 1,
        ]);

        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_1.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_2.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_3.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_4.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_5.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_6.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_7.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_8.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_9.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
        NoticiaImagen::create([
            'path' => 'img/noticias/sder/12/11_12_2024_10.jpg',
            'noticia_id' => self::$sder_new12->id,
        ]);
    }
}
