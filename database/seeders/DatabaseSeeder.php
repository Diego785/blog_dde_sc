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
            'nombre' => 'Subdirección de Educación Regular',
        ]);
        Unidad::create([
            'nombre' => 'Subdirección de Educación Alternativa y Especial',
        ]);
        Unidad::create([
            'nombre' => 'Subdirección de Educación Superior',
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
            SeaeNoticiaSeeder::class,
            SubdireccionNoticiaSeeder::class,
        ]);
    }
}
