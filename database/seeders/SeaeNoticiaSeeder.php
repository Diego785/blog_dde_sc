<?php

namespace Database\Seeders;

use App\Models\Noticia;
use App\Models\NoticiaImagen;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeaeNoticiaSeeder extends Seeder
{
    public static $seae_new1, $seae_new2, $seae_new3;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        self::$seae_new1 = Noticia::create([
            'titulo' => 'El novedoso robot que ganó el concurso de Talentos Extraordinarios en Santa Cruz',
            'descripcion' => "Talentos Extraordinarios en Santa Cruz\n
        Con su novedoso invento Yu Long Ricardo Wang obtuvo la medalla de oro por segundo año consecutivo en la categoría de ciencia y tecnología\n
        Un innovador prototipo de esqueleto humano que imita los movimientos de una persona, creado por el estudiante Yu Long Ricardo Wang Jallaza, fue el ganador del tercer Encuentro de Estudiantes con Productos, Habilidades y Talentos Extraordinarios del departamento de Santa Cruz.\n\n
        Con su novedoso invento Yu Long Ricardo Wang obtuvo la medalla de oro por segundo año consecutivo en la categoría de ciencia y tecnología y logró clasificarse a la fase nacional de este concurso organizado por el Ministerio de Educación que se desarrollará en Agosto, en el departamento de La Paz.\n\n
        ¿Qué hace el robot?\n
        El estudiante, que representa al colegio Británico Santa Cruz, indica que este robot, que mide un metro y medio, tiene la finalidad de realizar trabajos que pueden ser riesgosos para el ser humano. “Este esqueleto puede realizar labores en lugares donde el hombre no pueda entrar o que pueda ser de mucho riesgo”, agregó.\n\n
        “Es robot tiene un exoesqueleto, que se debe colocar una persona para manipularlo. Luego el usuario debe mover los brazos, piernas o agacharse y el robot detectará sus movimientos y los copiará. El robot puede mover cualquier parte del cuerpo”, explicó en contacto con EL DEBER.\n
        Yu Long Ricardo comenta que demoró tres meses en desarrollar el proyecto denominado ‘Exotechno’, en el que creó un prototipo de esqueleto humano con piezas impresas de plásticos que funcionan a través de diferentes motores que tiene conectados.\n
        Además, indica que los jueces del concurso departamental valoraron su innovadora propuesta y su funcionalidad, por lo que le otorgaron el primer lugar en la categoría del área de ciencia y tecnología.\n\n
        Ahora, el estudiante cruceño deberá prepararse para participar en el tercer Encuentro Nacional de Estudiantes con Productos, Habilidades y Talentos Extraordinarios, organizado por el Ministerio de Educación, en el que representará a departamento de Santa Cruz.\n\n
        Yu Long Ricardo señala que buscará ganar este concurso nacional por tercer año consecutivo, pues anteriormente ya ha obtenido medallas de oro en proyectos que elaboró junto a su hermano Yulin Jorge.",
            'fecha' => Carbon::create(2024, 5, 17),
            'hora' => '00:00:00',
            'portada_path' => 'noticias/seae/17_05_2024_1.webp',
        ]);



        NoticiaImagen::create([
            'path' => 'noticias/seae/17_05_2024_1.webp',
            'noticia_id' => self::$seae_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/17_05_2024_2.jpeg',
            'noticia_id' => self::$seae_new1->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/17_05_2024_3.jpeg',
            'noticia_id' => self::$seae_new1->id,
        ]);



        self::$seae_new2 = Noticia::create([
            'titulo' => 'Inauguración de la gestión 2024 en el Centro Municipal de Rehabilitación para Personas en Consumo de Drogas',
            'descripcion' => "La Subdirección de Educación Alternativa y Especial de Santa Cruz , presente en la inauguración de la gestión 2024 en el Centro Municipal de Rehabilitación para Personas en Consumo de Drogas.",
            'fecha' => Carbon::create(2024, 3, 6),
            'hora' => '00:00:00',
            'portada_path' => 'noticias/seae/06_03_2024_1.jpg',
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/06_03_2024_1.jpg',
            'noticia_id' => self::$seae_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/06_03_2024_2.jpg',
            'noticia_id' => self::$seae_new2->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/06_03_2024_3.jpg',
            'noticia_id' => self::$seae_new2->id,
        ]);


        self::$seae_new3 = Noticia::create([
            'titulo' => 'Vicepresidente y Ministro de Educación destacan avances del Sistema Educativo Plurinacional y el Vivir Bien en evento educativo con futuros maestros',
            'descripcion' => "Vicepresidente y Ministro de Educación destacan avances del Sistema Educativo Plurinacional y el Vivir Bien en evento educativo con futuros maestros.\n\nEl vicepresidente David Choquehuanca, y el ministro de Educación, Edgar Pary Chambi, expusieron los logros y resultados del Sistema Educativo Plurinacional y reflexionaron sobre los desafíos hacia la construcción del horizonte del Vivir Bien frente a un auditorio de más de 4.000 estudiantes de las Escuelas Superiores de Formación de Maestros (ESFMs) del departamento de La Paz.",

            'fecha' => Carbon::create(2024, 2, 24),
            'hora' => '00:00:00',
            'portada_path' => 'noticias/seae/24_02_2024_1.jpg',
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_1.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_2.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_3.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_4.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_5.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_6.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_7.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_8.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_9.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_10.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);
        NoticiaImagen::create([
            'path' => 'noticias/seae/24_02_2024_11.jpg',
            'noticia_id' => self::$seae_new3->id,
        ]);

    }
}
