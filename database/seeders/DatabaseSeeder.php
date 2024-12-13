<?php

namespace Database\Seeders;

use App\Models\Unidad;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();


        Unidad::create([
            'nombre' => 'SUB-DIRECCION DE EDUCACION REGULAR',
            'jefe' => 'LIC. CLAUDIA MARIANA ARISPE ROMAN',
            'cargo' => 'SUB-DIRECTORA DE EDUCACION REGULAR',
            'objetivo' => 'Apoyar la implantación y funcionamiento del Sistema de Programación de operaciones de manera que se mejore el proceso de formulación de planes y programas de la DDE-SCZ. Asimismo asegurar el procesamiento de información y análisis sobre la población educativa, infraestructura educativa y formación docente-administrativa, en forma oportuna, confiable y veraz, tanto del área de educación formal como alternativa y consolidar el funcionamiento de núcleos educativos y órganos plurinacionales del Estado Boliviano.',
            'perfil_jefe_path' => 'img/subdirectora2-sder.jpg',
       
        ]);
        Unidad::create([
            'nombre' => 'SUB-DIRECCIÓN DE EDUCACIÓN ALTERNATIVA Y ESPECIAL',
            'jefe' => 'LIC. MIGUEL ANGEL SALAZAR INDA',
            'cargo' => 'SUB-DIRECTOR DE EDUCACION ALTERNATIVA Y ESPECIAL',
            'objetivo' => 'Apoyar la implementación y funcionamiento del sistema de programación de operaciones de manera que se mejore el proceso de formulación de planes y programas de la DDE-SCZ. Asimismo asegurar el procesamiento de información y análisis sobre población educativa y formulación docente-administrativa, en forma oportuna, confiable y veraz, tanto en área de educación formal como alternativa y consolidar el funcionamiento de núcleos educativos y órganos plurinacionales del Estado Boliviano.',
            'perfil_jefe_path' => 'img/subdirector-seae.jpg',

        ]);
        Unidad::create([
            'nombre' => 'SUB-DIRECCION DE EDUCACION SUPERIOR',
            'jefe' => 'LIC. VIRGINIA CASANOVA MAMANI',
            'cargo' => 'SUB-DIRECTORA DE EDUCACION SUPERIOR DE FORMACION PROFESIONAL A.I.',
            'objetivo' => 'Apoyar en la implementación y funcionamiento del Sistema de Programación de Operaciones de manera que se mejore el proceso de formulación de planes y programas de la DDE-SCZ. Asimismo asegurar el procesamiento de informacion y análisis sobre población educativa, infraestructura educativa y formacion docente-administrativa, en forma oportuna, confiable y veraz, tanto del área de Educación Superior de Formación Profesional, Técnica, Tecnológica, Lingüística, Artística, Universitaria y Formación de Maestros de órganos plurinacionales del Estado Boliviano.',
            'perfil_jefe_path' => 'img/subdirectora-ses.jpg',
        ]);
        Unidad::create([
            'nombre' => 'Unidad de Asuntos Administrativos',
        ]);
        Unidad::create([
            'nombre' => 'Unidad de Asuntos Juríridicos',
        ]);
        Unidad::create([
            'nombre' => 'Auditoría Interna',
        ]);
        Unidad::create([
            'nombre' => 'Unidad de Transparencia',
        ]);

        $this->call([
            UserSeeder::class,
            FormularioDenunciaSeeder::class,
            BibliografiaSeeder::class,
            ArchivoSeeder::class,
            NoticiaSeeder::class,
            // SeaeNoticiaSeeder::class,
            // SubdireccionNoticiaSeeder::class,
            InstitutoSeeder::class,
            ResolucionSeeder::class,
            DistritoSeeder::class,
            TecnicoSeeder::class,
            PortadaSeeder::class,
            ActividadSeeder::class,
        ]);
    }
}
