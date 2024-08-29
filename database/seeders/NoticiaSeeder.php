<?php

namespace Database\Seeders;

use App\Models\Noticia;
use App\Models\NoticiaImagen;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    public static $sder_new1, $sder_new2, $sder_new3, $sder_new4, $sder_new5, $sder_new6;

    /**
     * Run the database seeds.
     */



    public function run(): void
    {

        //NOTICIA 14/08/2024 - 1

        self::$sder_new1 = Noticia::create([
            'titulo' => 'Desarrollo de ENCUENTROS DISTRITALES en  los Distritos Educativos del Departamento de Santa Cruz',
            'descripcion' => "Desarrollo de ENCUENTROS DISTRITALES en  los Distritos Educativos del Departamento de Santa Cruz",
            'fecha' => Carbon::create(2024, 8, 14),
            'hora' => '23:00:00',
            'portada_path' => 'noticias/14_08_2024_1.jpg',
        ]);

        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_1.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_2.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_3.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_4.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_5.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_6.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_7.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_8.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_9.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/14_08_2024_10.jpg',
            'noticia_id' => self::$sder_new1->id,
        ]);



        //NOTICIA 11/08/2024 - 2

        self::$sder_new2 = Noticia::create([
            'titulo' => 'Inauguracion del 𝟯𝗲𝗿 𝗘𝗻𝗰𝘂𝗲𝗻𝘁𝗿𝗼 𝗱𝗲 𝗲𝘀𝘁𝘂𝗱𝗶𝗮𝗻𝘁𝗲𝘀 𝗰𝗼𝗻 𝗽𝗿𝗼𝗱𝘂𝗰𝘁𝗼𝘀, 𝗵𝗮𝗯𝗶𝗹𝗶𝗱𝗮𝗱𝗲𝘀 𝘆 𝘁𝗮𝗹𝗲𝗻𝘁𝗼 𝗲𝘅𝘁𝗿𝗮𝗼𝗿𝗱𝗶𝗻𝗮𝗿𝗶𝗼 “𝗗𝗲𝘀𝗰𝘂𝗯𝗿𝗶𝗲𝗻𝗱𝗼 𝗧𝗮𝗹𝗲𝗻𝘁𝗼𝘀”',
            'descripcion' => "El ministro de Educación, Omar Veliz Ramos, inauguró el 𝟯𝗲𝗿 𝗘𝗻𝗰𝘂𝗲𝗻𝘁𝗿𝗼 𝗱𝗲 𝗲𝘀𝘁𝘂𝗱𝗶𝗮𝗻𝘁𝗲𝘀 𝗰𝗼𝗻 𝗽𝗿𝗼𝗱𝘂𝗰𝘁𝗼𝘀, 𝗵𝗮𝗯𝗶𝗹𝗶𝗱𝗮𝗱𝗲𝘀 𝘆 𝘁𝗮𝗹𝗲𝗻𝘁𝗼 𝗲𝘅𝘁𝗿𝗮𝗼𝗿𝗱𝗶𝗻𝗮𝗿𝗶𝗼 “𝗗𝗲𝘀𝗰𝘂𝗯𝗿𝗶𝗲𝗻𝗱𝗼 𝗧𝗮𝗹𝗲𝗻𝘁𝗼𝘀”.\n\nEste encuentro es el resultado de un arduo #proceso de selección en unidades educativas, distritos y departamentos, destacando a los mejores #talentos de todo el país, donde los estudiantes mostraron sus #proyectos, innovaciones y creaciones que fueron evaluadas por un jurado especializado.\n\nEste evento es un claro ejemplo del compromiso del Ministerio de Educación por descubrir, incentivar y fortalecer el talento extraordinario de los educandos, contribuyendo así al desarrollo del Sistema Educativo Plurinacional.\n🛰 #EducaciónInforma",
            'fecha' => Carbon::create(2024, 8, 11),
            'hora' => '12:30:00',
            'portada_path' => 'noticias/11_08_2024_1.jpg',
        ]);

        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_1.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_2.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_3.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_4.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_5.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_6.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_7.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_8.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_9.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/11_08_2024_10.jpg',
            'noticia_id' => self::$sder_new2->id,
        ]);

        //NOTICIA 10/08/2024 - 3

        self::$sder_new3 = Noticia::create([
            'titulo' => 'Participación en la Feria Multisectorial D-5',
            'descripcion' => "Participación en la Feria Multisectorial D-5",
            'fecha' => Carbon::create(2024, 8, 10),
            'hora' => '12:00:00',
            'portada_path' => 'noticias/10_08_2024_1.jpg',
        ]);

        NoticiaImagen::create([
            'path' => 'noticias/10_08_2024_1.jpg',
            'noticia_id' => self::$sder_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/10_08_2024_2.jpg',
            'noticia_id' => self::$sder_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/10_08_2024_3.jpg',
            'noticia_id' => self::$sder_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/10_08_2024_4.jpg',
            'noticia_id' => self::$sder_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/10_08_2024_5.jpg',
            'noticia_id' => self::$sder_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/10_08_2024_6.jpg',
            'noticia_id' => self::$sder_new3->id,
        ]);

        //NOTICIA 08/08/2024 - 4

        self::$sder_new4 = Noticia::create([
            'titulo' => 'Desarrollo de ENCUENTROS DISTRITALES en  los Distritos Educativos del Departamento de Santa Cruz',
            'descripcion' => "Desarrollo de ENCUENTROS DISTRITALES en  los Distritos Educativos del Departamento de Santa Cruz",
            'fecha' => Carbon::create(2024, 8, 8),
            'hora' => '08:09:00',
            'portada_path' => 'noticias/08_08_2024_1.jpg',
        ]);

        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_1.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_2.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_3.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_4.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_5.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_6.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_7.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_8.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_9.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_10.jpg',
            'noticia_id' => self::$sder_new4->id,
        ]);

        //NOTICIA 08/08/2024 - 5

        self::$sder_new5 = Noticia::create([
            'titulo' => 'Feria Interinstitucional de la Villa Primero de Mayo',
            'descripcion' => "La Subdirección de Educación Regular participó en la  Feria Interinstitucional de la Villa Primero de Mayo permitiendo la atención directa al público",
            'fecha' => Carbon::create(2024, 8, 8),
            'hora' => '06:34:00',
            'portada_path' => 'noticias/08_08_2024_2_1.jpg',
        ]);

        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_2_1.jpg',
            'noticia_id' => self::$sder_new5->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/08_08_2024_2_2.jpg',
            'noticia_id' => self::$sder_new5->id,
        ]);

        //NOTICIA 06/08/2024 - 6
        self::$sder_new6 = Noticia::create([
            'titulo' => 'Homenaje Civico en conmemoración a los 199 años de festa libertaria del Estado Plurinacional de Bolivia.',
            'descripcion' => "199 AÑOS DE INDEPENDENCIA, HOY MÁS QUE NUNCA COMPROMETIDOS CON LA EDUCACIÓN DE SANTA CRUZ\nLa Dirección Departamental de Educación de Santa Cruz agradece la participación de las Unidades Educativas, Institutos Técnicos e Instituciones que participaron del Homenaje Civico en conmemoración a los 199 años de festa libertaria del Estado Plurinacional de Bolivia.\nAgradecemos el esfuerzo y apoyo de los estudiantes, maestros, directores y los distritos educativos de Santa Cruz 1, 2, 3 y Plan 3000.\n#felicidadesBolivia\n#ComprometidosConLaEducacion",
            'fecha' => Carbon::create(2024, 8, 6),
            'hora' => '12:23:00',
            'portada_path' => 'noticias/06_08_2024_1.jpg',
        ]);


        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_1.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_2.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_3.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_4.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_5.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_6.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_7.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_8.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_9.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/06_08_2024_10.jpg',
            'noticia_id' => self::$sder_new6->id,
        ]);
    }
}
