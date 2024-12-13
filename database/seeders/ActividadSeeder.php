<?php

namespace Database\Seeders;

use App\Models\Actividad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad1.jpg',
            'description' => 'TALLER REGIONAL DE FORTALECIMIENTO DEL MODELO EDUCATIVO SOCIOCOMUNITARIO PRODUCTIVO Y PREVENCIÓN DE TODO TIPO DE VIOLENCIA EN UNIDADES EDUCATIVAS DEL SER - SEDE ROBORÉ, con la participación de los Distritos Educativos: San José, Puerto Suárez, Puerto Quijarro y Roboré.',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad2.jpg',
            'description' => 'TALLER REGIONAL DE FORTALECIMIENTO DEL MODELO EDUCATIVO SOCIOCOMUNITARIO PRODUCTIVO Y PREVENCIÓN DE TODO TIPO DE VIOLENCIA EN UNIDADES EDUCATIVAS DEL SER - SEDE SAN IGNACIO DE VELASCO, con la participación de los Distritos Educativos: San Miguel, San Rafael y San Ignacio.',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad3.jpg',
            'description' => '𝐌𝐢𝐧𝐢𝐬𝐭𝐞𝐫𝐢𝐨 𝐝𝐞 𝐄𝐝𝐮𝐜𝐚𝐜𝐢ó𝐧 𝐜𝐨𝐧𝐯𝐨𝐜𝐚 𝐚 𝐞𝐬𝐭𝐮𝐝𝐢𝐚𝐧𝐭𝐞𝐬 𝐝𝐞 𝐒𝐞𝐜𝐮𝐧𝐝𝐚𝐫𝐢𝐚 𝐝𝐞 𝐭𝐨𝐝𝐨 𝐞𝐥 𝐩𝐚í𝐬 𝐚 𝐩𝐚𝐫𝐭𝐢𝐜𝐢𝐩𝐚𝐫 𝐞𝐧 𝐥𝐚 𝟏𝟑ª 𝐎𝐥𝐢𝐦𝐩𝐢𝐚𝐝𝐚 𝐂𝐢𝐞𝐧𝐭í𝐟𝐢𝐜𝐚 𝐄𝐬𝐭𝐮𝐝𝐢𝐚𝐧𝐭𝐢𝐥 𝟐𝟎𝟐𝟒',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad4.jpg',
            'description' => 'TALLER REGIONAL DE FORTALECIMIENTO DEL MODELO EDUCATIVO SOCIOCOMUNITARIO PRODUCTIVO Y PREVENCIÓN DE TODO TIPO DE VIOLENCIA EN UNIDADES EDUCATIVAS DEL SER - SEDE YAPACANI, con la participación de los Distritos Educativos: San Carlos, Buena Vista, San Juan de Yapacani y Yapacani.',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad5.jpg',
            'description' => 'Desarrollo del 𝗧𝗼𝗿𝗻𝗲𝗼 𝗱𝗲 𝗥𝗼𝗯ó𝘁𝗶𝗰𝗮 𝗙𝗜𝗥𝗦𝗧 𝗕𝗢𝗟𝗜𝗩𝗜𝗔 𝗿𝘂𝗺𝗯𝗼 𝗮𝗹 𝗙𝗶𝗿𝘀𝘁 𝗚𝗹𝗼𝗯𝗮𝗹 𝗖𝗵𝗮𝗹𝗹𝗲𝗻𝗴𝗲 𝗔𝘁𝗲𝗻𝗮𝘀 – 𝗚𝗿𝗲𝗰𝗶𝗮',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad6.jpg',
            'description' => 'Educación Regular presente en la Feria Intersectorial realizado en el Municipio de Cotoca, brindando información y servicio al público',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad7.jpg',
            'description' => 'TALLER REGIONAL DE FORTALECIMIENTO DEL MODELO EDUCATIVO SOCIOCOMUNITARIO PRODUCTIVO Y PREVENCIÓN DE TODO TIPO DE VIOLENCIA EN UNIDADES EDUCATIVAS DEL SER con la participación de los Distritos Educativos de Montero, Okinawa, Mineros, General Saavedra, Portachuelo y Santa Rosa de Sara.',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad8.jpg',
            'description' => "'Lanzamiento de la '2DA OLIMPIADA DE AJEDREZ DEL SISTEMA EDUCATIVO - SANTA CRUZ'",
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad9.jpg',
            'description' => 'El equipo técnico de la Subdirección de Educación Regular, maestras y maestros del CAIP-AH el día de hoy estuvo presente  en la FERIA INTERINSTITUCIONAL realizada en la Plaza del Mechero, zona Plan 3000, brindando atención y servicio al público.',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad10.jpg',
            'description' => 'ACTO PROTOCOLAR DE ACREDITACIÓN DE DEFENSORAS Y DEFENSORES ESTUDIANTILES DE SANTA CRUZ 2024',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad11.jpg',
            'description' => 'La Subdirección De Educación Regular Santa Cruz participó del ACTO DE PRESENTACIÓN DE LA COLECCIÓN EL PRINCIPITO TRADUCIDO A IDIOMAS ORIGINARIOS realizado por la Editorial del Estado Plurinacional de Bolivia en la 25º FERIA INTERNACIONAL DEL LIBRO DE SANTA CRUZ en instalaciones de FEXCPOCRUZ',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad12.jpg',
            'description' => 'Acto Inaugural de entrega del Bono "JUANCITO PINTO" 2024, realizado en el Municipio de La Guardia.',
            'unidad_id' => 1,
        ]);
        Actividad::create([
            'imagen_path' => 'img/img-actividades/actividad13.jpg',
            'description' => '🌟 13ª Olimpiada Científica Estudiantil Plurinacional Boliviana ” ETAPA DEPARTAMENTAL 🌟',
            'unidad_id' => 1,
        ]);
    }
}
