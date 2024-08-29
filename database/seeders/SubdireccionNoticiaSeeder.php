<?php

namespace Database\Seeders;

use App\Models\SubdireccionNoticia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubdireccionNoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sder_new1_id = NoticiaSeeder::$sder_new1->id;
        $sder_new2_id = NoticiaSeeder::$sder_new2->id;
        $sder_new3_id = NoticiaSeeder::$sder_new3->id;
        $sder_new4_id = NoticiaSeeder::$sder_new4->id;
        $sder_new5_id = NoticiaSeeder::$sder_new5->id;
        $sder_new6_id = NoticiaSeeder::$sder_new6->id;

        $seae_new1_id = SeaeNoticiaSeeder::$seae_new1->id;
        $seae_new2_id = SeaeNoticiaSeeder::$seae_new2->id;
        $seae_new3_id = SeaeNoticiaSeeder::$seae_new3->id;
        
        //SDER

        SubdireccionNoticia::create([
            'noticia_id' => $sder_new1_id,
            'unidad_id' => 1,
        ]);
        SubdireccionNoticia::create([
            'noticia_id' => $sder_new2_id,
            'unidad_id' => 1,
        ]);
        SubdireccionNoticia::create([
            'noticia_id' => $sder_new3_id,
            'unidad_id' => 1,
        ]);
        SubdireccionNoticia::create([
            'noticia_id' => $sder_new4_id,
            'unidad_id' => 1,
        ]);
        SubdireccionNoticia::create([
            'noticia_id' => $sder_new5_id,
            'unidad_id' => 1,
        ]);
        SubdireccionNoticia::create([
            'noticia_id' => $sder_new6_id,
            'unidad_id' => 1,
        ]);


        //SEAE

        SubdireccionNoticia::create([
            'noticia_id' => $seae_new1_id,
            'unidad_id' => 2,
        ]);
        SubdireccionNoticia::create([
            'noticia_id' => $seae_new2_id,
            'unidad_id' => 2,
        ]);
        SubdireccionNoticia::create([
            'noticia_id' => $seae_new3_id,
            'unidad_id' => 2,
        ]);
    }
}
