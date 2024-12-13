<?php

namespace Database\Seeders;

use App\Models\Portada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Portada::create([
            'imagen_path' => 'img/img-banners/banner19.jpg',
            'url' => 'https://evento.minedu.gob.bo/evento/356',
            'unidad_id' => 1,
        ]);
        Portada::create([
            'imagen_path' => 'img/img-banners/banner20.jpg',
            'url' => 'https://www.minedu.gob.bo/files/publicaciones/minedu/Lista_ganadores_2do_concurso_Experiencias_Enseanza_LIO_.pdf',
            'unidad_id' => 1,
        ]);
        Portada::create([
            'imagen_path' => 'img/img-banners/banner21.png',
            'url' => 'https://www.minedu.gob.bo/index.php?option=com_k2&view=item&id=1087:guia-metodologica-de-planificacion-curricular-educacion-de-personas-jovenes-y-adultas',
            'unidad_id' => 1,
        ]);
        Portada::create([
            'imagen_path' => 'img/img-banners/banner22.jpg',
            'url' => 'https://educainnova.minedu.gob.bo/',
            'unidad_id' => 1,
        ]);
        Portada::create([
            'imagen_path' => 'img/img-banners/banner23.jpg',
            'url' => 'https://olimpiada.minedu.gob.bo/',
            'unidad_id' => 1,
        ]);
        Portada::create([
            'imagen_path' => 'img/img-banners/banner24.jpg',
            'url' => 'https://www.minedu.gob.bo/index.php?option=com_content&view=article&id=7462&catid=91&Itemid=933',
            'unidad_id' => 1,
        
        ]);
        Portada::create([
            'imagen_path' => 'img/img-banners/banner25.jpg',
            'url' => 'https://www.minedu.gob.bo/files/publicaciones/veaye/dgea/Lista_de_centros_de_capacitacion.pdf',
            'unidad_id' => 1,
        ]);
        Portada::create([
            'imagen_path' => 'img/img-banners/banner26.jpg',
            'url' => 'https://red.minedu.gob.bo/textosAprendizaje',
            'unidad_id' => 1,
        ]);
        Portada::create([
            'imagen_path' => 'img/img-banners/banner27.jpg',
            'url' => 'https://www.minedu.gob.bo/index.php?option=com_content&view=article&id=7067&catid=90&Itemid=933',
            'unidad_id' => 1,
        ]);
    }
}
