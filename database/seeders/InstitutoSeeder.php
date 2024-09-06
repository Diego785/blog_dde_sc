<?php

namespace Database\Seeders;

use App\Models\InstitutoTecnicoSuperior;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstitutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'TECNOLÓGICO SANTA CRUZ',
            'provincia' => 'ANDRES IBAÑEZ',
            'municipio' => 'SANTA CRUZ',
            'dependencia' => 'FISCAL',
            'creacion' => '1982',
            'img_path' => 'img/img-institutos/tecnologico-santa-cruz.jpg',
        ]);

        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO SUPERIOR JESUS MARIA FE Y ALEGRIA',
            'provincia' => 'ANDRES IBAÑEZ',
            'municipio' => 'SANTA CRUZ',
            'dependencia' => 'CONVENIO',
            'creacion' => '1989',
            'img_path' => 'img/img-institutos/jesus-maria-fe-y-alegria.jpeg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLÓGICO POPULAR IGUALITARIO ANDRES IBAÑEZ',
            'provincia' => 'ANDRES IBAÑEZ',
            'municipio' => 'SANTA CRUZ',
            'dependencia' => 'FISCAL',
            'creacion' => '2008',
            'img_path' => 'img/img-institutos/andres-ibanez.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'ESCUELA NACIONAL SUPERIOR DE EDUCACIÓN COMERCIAL ENSEC',
            'provincia' => 'ANDRES IBAÑEZ',
            'municipio' => 'SANTA CRUZ',
            'dependencia' => 'FISCAL',
            'creacion' => '1920',
            'img_path' => 'img/img-institutos/ensec.png',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO SUPERIOR DE EDUCACIÓN COMERCIAL ISEC- MONTERO',
            'provincia' => 'OBISPO SANTIESTEBAN',
            'municipio' => 'MONTERO',
            'dependencia' => 'FISCAL',
            'creacion' => '1989',
            'img_path' => 'img/img-institutos/isec.png',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'TECNOLOGICO SUPERIOR PAILON "JOSE LUIS SAN JUAN"',
            'provincia' => 'ANDRES IBAÑEZ',
            'municipio' => 'SANTA CRUZ',
            'dependencia' => 'FISCAL',
            'creacion' => '1982',
            'img_path' => 'img/img-institutos/jose-luis-san-juan.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLÓGICO SANTA ROSA DEL SARA',
            'provincia' => 'SARA',
            'municipio' => 'SANTA ROSA',
            'dependencia' => 'FISCAL',
            'creacion' => '2013',
            'img_path' => 'img/img-institutos/itsar.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TÉCNICO YAPACANI INTY',
            'provincia' => 'ICHILO',
            'municipio' => 'YAPACANI',
            'dependencia' => 'FISCAL',
            'creacion' => '2008',
            'img_path' => 'img/img-institutos/inty.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLÓGICO PROFESOR ROBERTO PILLAI HERRERA',
            'provincia' => 'ANGEL SANDOVAL',
            'municipio' => 'SAN MATIAS',
            'dependencia' => 'FISCAL',
            'creacion' => '2010',
            'img_path' => 'img/img-institutos/prof-roberto-pillai-herrera.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLÓGICO COMUNITARIO INDIGENA ORIGINARIO SAN GERMAN',
            'provincia' => 'ICHILO',
            'municipio' => 'YAPACANI',
            'dependencia' => 'FISCAL',
            'creacion' => '2008',
            'img_path' => 'img/img-institutos/san-german.png',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO SUPERIOR ERWIN RECK STEMMSERS',
            'provincia' => 'CHIQUITOS',
            'municipio' => 'SAN JOSE',
            'dependencia' => 'FISCAL',
            'creacion' => '1993',
            'img_path' => 'img/img-institutos/iters.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO COMERCIAL DE LA NACIÓN INCOS SANTA CRUZ',
            'provincia' => 'ANDRES IBAÑEZ',
            'municipio' => 'SANTA CRUZ',
            'dependencia' => 'FISCAL',
            'creacion' => '1985',
            'img_path' => 'img/img-institutos/incos.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TÉCNICO INCOS MAIRANA',
            'provincia' => 'FLORIDA',
            'municipio' => 'MAIRANA',
            'dependencia' => 'FISCAL',
            'creacion' => '1993',
            'img_path' => 'img/img-institutos/itm.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLÓGICO INDIGENA ORIGINARIO Y CAMPESINO DE LA CORDILLERA',
            'provincia' => 'CORDILLERA',
            'municipio' => 'CABEZAS',
            'dependencia' => 'FISCAL',
            'creacion' => '2008',
            'img_path' => 'img/img-institutos/itc.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'TECNOLÓGICO AGROPECUARIO PORTACHUELO',
            'provincia' => 'SARA',
            'municipio' => 'PORTACHUELO',
            'dependencia' => 'FISCAL',
            'creacion' => '1981',
            'img_path' => 'img/img-institutos/tap.png',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLOGICO SUPERIOR TAREMA IKUA',
            'provincia' => 'SAN ANTONIO DEL PARAPETI',
            'municipio' => 'CHARAGUA',
            'dependencia' => 'FISCAL',
            'creacion' => '2014',
            'img_path' => 'img/img-institutos/tarema-ikua.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => ' INSTITUTO TECNOLÓGICO SUPERIOR "YEMBO´EZA RËTÄ ITSYR"',
            'provincia' => 'GUARAYOS',
            'municipio' => 'ASCENSIÓN DE GUARAYOS',
            'dependencia' => 'FISCAL',
            'creacion' => '03/09/2015',
            'img_path' => 'img/img-institutos/yembo-eza-reta.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLOGICO HERMANO PACIFICO FELTTI TEHPAF',
            'provincia' => 'OBISPO SANTIESTEBAN',
            'municipio' => 'SAGRADO CORAZON',
            'dependencia' => 'FISCAL',
            'creacion' => '15/04/2015',
            'img_path' => 'img/img-institutos/tehpaf.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLÓGICO GERMAN BUSCH ITEGEB',
            'provincia' => 'GERMAN BUSCH',
            'municipio' => 'PUERTO SUAREZ',
            'dependencia' => 'FISCAL',
            'creacion' => '13/04/2015',
            'img_path' => 'img/img-institutos/itegeb.jpg',
        ]);
        InstitutoTecnicoSuperior::create([
            'dpto' => 'SANTA CRUZ',
            'nombre' => 'INSTITUTO TECNOLOGICO PENTAGUAZU WARNES',
            'provincia' => 'WARNES',
            'municipio' => 'WARNES',
            'dependencia' => 'FISCAL',
            'creacion' => '03/09/2015',
            'img_path' => 'img/img-institutos/itepw.jpg',
        ]);
    }
}
