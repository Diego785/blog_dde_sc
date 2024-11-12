<?php

namespace Database\Seeders;

use App\Models\Tecnico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnicos = [
            [
                'nombre' => 'Lic. Claudina Nina Calisaya',
                'cargo' => 'Técnica de Educación Inicial en Familia Comunitaria Vocacional',
                'imagen' => 'img/img-profiles/claudina.jpg',
            ],
            [
                'nombre' => 'Lic. Verónica Castro Torrez',
                'cargo' => 'Técnica de Educación Inicial en Familia Comunitaria Vocacional',
                'imagen' => null, // No image provided
            ],
            [
                'nombre' => 'Lic. Jessica Kamy Menacho Ramos',
                'cargo' => 'Técnica de Educación Primaria Comunitaria Vocacional',
                'imagen' => null, // No image provided
            ],
            [
                'nombre' => 'Lic. Edwin Rios Peñaranda',
                'cargo' => 'Técnico de Educación Primaria Comunitaria Vocacional',
                'imagen' => null, // No image provided
            ],
            [
                'nombre' => 'Lic. Gloria Vanesa Ajata Villca',
                'cargo' => 'Técnica de Educación Primaria Comunitaria Vocacional',
                'imagen' => 'img/img-profiles/gloria.jpg',
            ],
            [
                'nombre' => 'Lic. Lidia Soria Terceros',
                'cargo' => 'Técnica de Educación Secundaria Comunitaria Vocacional',
                'imagen' => 'img/img-profiles/lidia2.jpg',
            ],
            [
                'nombre' => 'Lic. Cherla Rosario Sequeli Potosi',
                'cargo' => 'Técnica de Educación Secundaria Comunitaria Vocacional',
                'imagen' => 'img/img-profiles/cherla.jpg',
            ],
        ];

        foreach ($tecnicos as $tecnico) {
            Tecnico::create($tecnico);
        }
    }
}
