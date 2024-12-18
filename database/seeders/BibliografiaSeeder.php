<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Bibliografia;
use App\Models\Tipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BibliografiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public static $normativa_general1, $normativa_general2, $normativa_general3,
        $normativa_general4, $normativa_general5, $normativa_general6, $normativa_general7,
        $normativa_general8, $normativa_general9, $normativa_general10, $normativa_general11,
        $normativa_general12;

    public static $normativa_especifica1, $normativa_especifica2, $normativa_especifica3,
        $normativa_especifica4, $normativa_especifica5, $normativa_especifica6, $normativa_especifica7,
        $normativa_especifica8, $normativa_especifica9, $normativa_especifica10, $normativa_especifica11,
        $normativa_especifica12, $normativa_especifica13, $normativa_especifica14, $normativa_especifica15;

    public static $politica_educativa1, $politica_educativa2, $politica_educativa3;

    public static $pedagogico_curricular1, $pedagogico_curricular2, $pedagogico_curricular3, 
    $pedagogico_curricular4, $pedagogico_curricular5, $pedagogico_curricular6, $pedagogico_curricular7, 
    $pedagogico_curricular8;


    public function run(): void
    {

        //AREAS
        $area1 = Area::create([
            'nivel' => 'Bibliografía Nivel Primario',
        ]);
        $area2 = Area::create([
            'nivel' => 'Bibliografía Nivel Secundario',
        ]);

        //TIPOS
        $tipo1 = Tipo::create([
            'tipo' => 'Normativa General',
        ]);
        $tipo2 = Tipo::create([
            'tipo' => 'Normativa Específica',
        ]);
        $tipo3 = Tipo::create([
            'tipo' => 'Política Educativa',
        ]);
        $tipo4 = Tipo::create([
            'tipo' => 'Pedagógico Curricular (SER)',
        ]);


        //--------------------- BIBLIOGRAFIAS -------------------------//

        //NORMATIVA GENERAL
        self::$normativa_general1 = Bibliografia::create([
            'portada_path' => 'https://www.minedu.gob.bo/images/publicaciones/veaye/1.-CPE-2008.png',
            'descripcion' => 'Constitución Política del Estado',
            'tipo_id' => $tipo1->id,
        ]);

        self::$normativa_general2 = Bibliografia::create([
            'portada_path' => 'https://www.minedu.gob.bo/images/publicaciones/veaye/2.-Ley-070--2010-Avelino-Sinani---Elizardo-Perez.png',
            'descripcion' => 'Ley N° 070 de 20 de diciembre de 2010, de la Educación "Avelino Siñani –Elizardo Pérez',
            'tipo_id' => $tipo1->id,
        ]);

        self::$normativa_general3 = Bibliografia::create([
            'portada_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDcngFRJjf94V7lNbCnL8ZBdUeWGGAmueuHQ&s',
            'descripcion' => 'Ley N° 045 de 8 de octubre de 2010, Contra el Racismo y Toda Forma de Discriminación.',
            'tipo_id' => $tipo1->id,
        ]);
        self::$normativa_general4 = Bibliografia::create([
            'portada_path' => 'https://bolivia.unfpa.org/sites/default/files/pub-pdfpreview/ce7b76dbdb84de45f139fd6124648900.png',
            'descripcion' => 'Ley N° 348 de 9 de marzo de 2013, Integral para garantizar a la Mujeres una vida libre de Violencia.',
            'tipo_id' => $tipo1->id,
        ]);
        self::$normativa_general5 = Bibliografia::create([
            'portada_path' => 'https://justiciajuvenil.org.bo/wp-content/uploads/2022/07/biblio1.jpg',
            'descripcion' => 'Ley N° 548 de 17 de julio de 2014, Código Niña, Niño y Adolescente.',
            'tipo_id' => $tipo1->id,
        ]);



        self::$normativa_general6 = Bibliografia::create([
            'portada_path' => 'https://image.slidesharecdn.com/ley269derechosypolticaslingustico-231014200406-b1e71487/85/LEY-269-DERECHOS-y-POLITICAS-LINGUISTICO-pptx-1-320.jpg',
            'descripcion' => 'Ley N° 269 de 2 de agosto de 2012, General de Derechos y Políticas Lingüísticas.',
            'tipo_id' => $tipo1->id,
        ]);
        self::$normativa_general7 = Bibliografia::create([
            'portada_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDcngFRJjf94V7lNbCnL8ZBdUeWGGAmueuHQ&s',
            'descripcion' => 'Decreto Supremo N° 0762 de 5 de enero de 2011, Reglamento a la Ley Contra el Racismo y toda forma de Discriminación.',
            'tipo_id' => $tipo1->id,
        ]);
        self::$normativa_general8 = Bibliografia::create([
            'portada_path' => 'https://www.minedu.gob.bo/images/publicaciones/veaye/dgee/Ley-223-2012-Personas-con-discapacidad-copia.png',
            'descripcion' => 'Ley N° 223 de 2 de marzo de 2012, General para Personas con Discapacidad.',
            'tipo_id' => $tipo1->id,
        ]);
        self::$normativa_general9 = Bibliografia::create([
            'portada_path' => 'https://bolivia.unfpa.org/sites/default/files/pub-pdfpreview/96809630066831d370df4eaf16b88c74.png',
            'descripcion' => 'Ley N° 342 de 5 de febrero de 2013, de la Juventud.',
            'tipo_id' => $tipo1->id,
        ]);
        self::$normativa_general10 = Bibliografia::create([
            'portada_path' => 'https://image.isu.pub/171019204741-cf0bcd622e4874e10b8f3064f07dc1b3/jpg/page_1.jpg',
            'descripcion' => 'Ley N° 342 de 5 de febrero de 2013, de la Juventud.',
            'tipo_id' => $tipo1->id,
        ]);

        self::$normativa_general11 = Bibliografia::create([
            'portada_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWJS34u-3lMkuv7tLKNce59DAkaRdI1FQMtg&s',
            'descripcion' => 'Ley N° 004, de 31 de marzo de 2010, de Lucha Contra la Corrupción, Enriquecimiento Ilícito e Investigación de Fortunas "MARCELO QUIROGA SANTA CRUZ".',
            'tipo_id' => $tipo1->id,
        ]);
        self::$normativa_general12 = Bibliografia::create([
            'portada_path' => 'https://image.slidesharecdn.com/cartilla3unfpa-160829182001/85/Ley-No-450-de-Proteccion-a-Naciones-y-Pueblos-Indigena-Originarios-en-Situacion-de-Alta-Vulbnerabilidad-1-320.jpg',
            'descripcion' => 'Ley N° 450 de 04 de diciembre de 2013, “Ley de Protección a Naciones y Pueblos Indígena Originarios en situación de Alta Vulnerabilidad”.',
            'tipo_id' => $tipo1->id,
        ]);





        //NORMATIVA ESPECÍFICA
        self::$normativa_especifica1 = Bibliografia::create([
            'portada_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWfwXk7lyaG2ITtl8-A-CVVDl57qmxQqbSvw&s',
            'descripcion' => 'Ley N° 031 de 19 de julio de 2010, Marco de Autonomías y Descentralización "Andrés Ibáñez".',
            'tipo_id' => $tipo2->id,
        ]);

        self::$normativa_especifica2 = Bibliografia::create([
            'portada_path' => 'https://fdteulp.org/wp-content/uploads/2024/01/Reglamento-Escalafon-DS-4688-1.jpg',
            'descripcion' => 'Decreto Supremo N° 4688 de 18 de julio de 1957, Reglamento del Escalafón Nacional del Servicio de Educación.',
            'tipo_id' => $tipo2->id,
        ]);

        self::$normativa_especifica3 = Bibliografia::create([
            'portada_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKtq2Mxymevcsbz_Srxq_0DUpG6-ulon8cQg&s',
            'descripcion' => 'Decreto Supremo N° 1302 de 1° de agosto de 2012, que establece mecanismos que coadyuven a la erradicación de la violencia, maltrato y abuso que atente contra la vida e integridad física, psicológica y/o sexual de niñas, niños y adolescentes estudiantes, en el ámbito educativo.',
            'tipo_id' => $tipo2->id,
        ]);

        self::$normativa_especifica4 = Bibliografia::create([
            'portada_path' => 'https://fdteulp.org/wp-content/uploads/2023/09/DS-1320-1.jpg',
            'descripcion' => 'Decreto Supremo N° 1320 de 8 de agosto de 2012, Modifica el Parágrafo I del Artículo 3 del Decreto Supremo N° 1302, de 1° de agosto de 2012.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica5 = Bibliografia::create([
            'portada_path' => 'https://imgv2-2-f.scribdassets.com/img/document/694121544/original/e9bd981582/1714356936?v=1',
            'descripcion' => 'Decreto Supremo N° 813 de 9 de marzo de 2011, Reglamenta la estructura, composición y funciones de las Dirección Departamentales de Educación – DDEs, de la Ley N° 070 de 20 de diciembre de 2010, de la Educación "Avelino Siñani – Elizardo Pérez".',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica6 = Bibliografia::create([
            'portada_path' => 'https://red.minedu.gob.bo/repositorio/img/portada900/32682.jpg',
            'descripcion' => 'Resolución Suprema N° 212414 de 21 de abril de 1993, Reglamento de Faltas y Sanciones del Magisterio.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica7 = Bibliografia::create([
            'portada_path' => 'https://d20ohkaloyme4g.cloudfront.net/img/document_thumbnails/d32caa47f0dc080a0644b56619822823/thumb_1200_1835.png',
            'descripcion' => 'Resolución Ministerial N° 373/2023 de 19 de mayo de 2023, Aprueba las Directrices para la Modificación de la Estructura Organizacional de las Direcciones Departamentales de Educación y la Estructura Organizacional Base.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica8 = Bibliografia::create([
            'portada_path' => 'https://image.isu.pub/230104204044-49198c2b8b0b12502f538dff658da4ad/jpg/page_1.jpg',
            'descripcion' => 'Resolución Ministerial N° 0001/2023 de 3 de enero de 2023, que aprueba Normas Generales de Gestión Educativa. Subsistema Educación Regular – Subsistema de Educación Alternativa y Especial - Subsistema Educación Superior.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica9 = Bibliografia::create([
            'portada_path' => 'https://imgv2-1-f.scribdassets.com/img/document/684357666/original/91fb5df551/1718664168?v=1',
            'descripcion' => 'Resolución Ministerial N° 062/00 del 17 de febrero del 2000, que aprueba el Reglamento de la carrera administrativa del servicio de educación pública.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica10 = Bibliografia::create([
            'portada_path' => 'https://guao.org/sites/default/files/buenas%20practicas/Protocolo%20de%20prevenci%C3%B3n%2C%20actuaci%C3%B3n%20y%20denuncia%20en%20casos%20de%20violencia%20f%C3%ADsica%20psicol%C3%B3gica%20y%20sexual.jpg',
            'descripcion' => 'Resolución Ministerial N° 864/2019 del 09 de agosto de 2019, que aprueba el Protocolo de Prevención, Actuación y Denuncia en Casos de Violencia Física, Psicológica y Sexual en Unidades Educativas y Centros de Educación Especial.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica11 = Bibliografia::create([
            'portada_path' => 'https://d20ohkaloyme4g.cloudfront.net/img/document_thumbnails/bc3bc8a7e01a3ef6f6eb60e988fdaeab/thumb_1200_1964.png',
            'descripcion' => 'Resolución Ministerial N° 166/2023 del 27 de febrero de 2023, que modifica la Resolución Ministerial N° 062/00 del 17 de febrero del 2000.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica12 = Bibliografia::create([
            'portada_path' => 'https://imgv2-1-f.scribdassets.com/img/document/641427402/original/4e883238e2/1717299358?v=1',
            'descripcion' => 'Resolución Ministerial N° 660/2021 del 4 de noviembre de 2021, que aprueba el Reglamento de Apertura, Modificación, Ampliación, Reducción de niveles, Cambio de Especialidades, Registro y/o Cierre de Centros de Educación Alternativa.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica13 = Bibliografia::create([
            'portada_path' => 'https://media.quizizz.com/_mdserver/main/media/resource/gs/quizizz-media/quizzes/fc267903-2e84-465a-aa7c-8724de589faf-v2',
            'descripcion' => 'Decreto Supremo N° 004 de 11 de febrero de 2009 que crea el programa de postalfabetización.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica14 = Bibliografia::create([
            'portada_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR95rQi2vZdmZ1IVY3xW0hBxB9w_M2337Vm1A&s',
            'descripcion' => 'Decreto Supremo N° 1318 de 8 de agosto de 2012 que modifica el Decreto Supremo 004 de 11 de febrero de 2009.',
            'tipo_id' => $tipo2->id,
        ]);
        self::$normativa_especifica15 = Bibliografia::create([
            'portada_path' => 'https://imgv2-1-f.scribdassets.com/img/document/605901195/original/270baaf2f6/1719254538?v=1',
            'descripcion' => 'Resolución Ministerial N° 928/2019 de 3 de septiembre de 2019, que aprueba el Reglamento de apertura, Modificación, Traslado, Fusión y Cierre de Unidades Educativas Públicas del Nivel Inicial en Familia Comunitaria, Primaria Comunitaria Vocacional y Secundaria Comunitaria Productiva del Subsistema de Educación Regular.',
            'tipo_id' => $tipo2->id,
        ]);



        //POLÍTICA EDUCATIVA
        self::$politica_educativa1 = Bibliografia::create([
            'portada_path' => 'https://red.minedu.gob.bo/repositorio/img/portada900/6178.jpg',
            'descripcion' => 'Ministerio de Planificación del Desarrollo. (2021). Plan de Desarrollo Económico Social 2021 – 2025.',
            'tipo_id' => $tipo3->id,
        ]);

        self::$politica_educativa2 = Bibliografia::create([
            'portada_path' => 'https://unesdoc.unesco.org/in/rest/Thumb/image?id=p%3A%3Ausmarcdef_0000246300_spa&title=Desglosar+el+Objetivo+de+Desarrollo+Sostenible+4%3A+Educaci%C3%B3n+2030%2C+gu%C3%ADa&year=2017&TypeOfDocument=UnescoPhysicalDocument&mat=PGD&ct=true&size=512&isPhysical=1',
            'descripcion' => 'Desglosar el Objetivo de Desarrollo Sostenible (ODS 4) Educación 2030 (UNESCO)',
            'tipo_id' => $tipo3->id,
        ]);

        self::$politica_educativa3 = Bibliografia::create([
            'portada_path' => 'https://red.minedu.gob.bo/repositorio/img/portada900/6197.jpg',
            'descripcion' => 'Ministerio de Educación. (s.f.). Bolivia 2025, primero la educación. Líneas de Acción Prioritarias del Ministerio de Educación 2022 – 2025.',
            'tipo_id' => $tipo3->id,
        ]);

        //PEDAGÓGICO CURRICULAR (SER)
        self::$pedagogico_curricular1 = Bibliografia::create([
            'portada_path' => 'https://imgv2-1-f.scribdassets.com/img/document/562703866/original/84ab3c2ef4/1719247441?v=1',
            'descripcion' => 'Resolución Ministerial N° 0473/2021 de 20 de agosto de 2021, que apreuba el Reglamento de Evaluación del Desarrollo Curricular del Subsistema de Educación Regular',
            'tipo_id' => $tipo4->id,
        ]);
        self::$pedagogico_curricular2 = Bibliografia::create([
            'portada_path' => 'https://librosdelministeriodeeducacion.info/wp-content/uploads/2023/02/Curriculo-Base-del-SEP-2023-731x1024.jpg',
            'descripcion' => 'Resolución Ministerial N° 10/2022 de 22 de noviembre de 2022, que aprueba el Currículo Base del Sistema Educativo Plurinacional.',
            'tipo_id' => $tipo4->id,
        ]);
        self::$pedagogico_curricular3 = Bibliografia::create([
            'portada_path' => 'https://red.minedu.gob.bo/repositorio/img/portada900/4093.jpg',
            'descripcion' => 'Resolución Ministerial N° 10/2022 de 22 de noviembre de 2022, que aprueba los Lineamientos Curriculares del Subsistema de Educación Regular.',
            'tipo_id' => $tipo4->id,
        ]);
        self::$pedagogico_curricular4 = Bibliografia::create([
            'portada_path' => 'https://red.minedu.gob.bo/repositorio/img/portada900/4095.jpg',
            'descripcion' => 'Resolución Ministerial N° 10/2022 de 22 de noviembre de 2022, que aprueba los Planes y Programas del Subsistema de Educación Regular 2023. (según el Nivel, Campos y Áreas de Saberes y Conocimientos).',
            'tipo_id' => $tipo4->id,
        ]);
        self::$pedagogico_curricular5 = Bibliografia::create([
            'portada_path' => 'https://red.minedu.gob.bo/repositorio/img/portada900/32700.jpg',
            'descripcion' => 'Resolución Ministerial N° 0244/2023 de 28 de marzo de 2023, que aprueba el Reglamento de Bachillerato Técnico Humanístico del Subsistema de Educación Regular y el Subsistema de Educación Alternativa y Especial.',
            'tipo_id' => $tipo4->id,
        ]);
        self::$pedagogico_curricular6 = Bibliografia::create([
            'portada_path' => 'https://red.minedu.gob.bo/repositorio/img/portada900/32695.jpg',
            'descripcion' => 'Resolución Ministerial 1204/2018 de 30 de noviembre de 2018 que prohibe todo tipo de prácticas, actitudes, comportamientos y conductas que vulneren el respeto y dignidad de las niñas, niños y adolescentes y que son consideradas violencia entre pares.',
            'tipo_id' => $tipo4->id,
        ]);
        self::$pedagogico_curricular7 = Bibliografia::create([
            'portada_path' => 'https://www.minedu.gob.bo/files/publicaciones/minedu/Portada_GIV_2023_280x350.jpg',
            'descripcion' => 'Ministerio de Educación (2023). Guía para la Identificación y Denuncia de la Violencia Intrafamiliar en el Ámbito Educativo. Primera Edición.',
            'tipo_id' => $tipo4->id,
        ]);
        self::$pedagogico_curricular8 = Bibliografia::create([
            'portada_path' => 'https://www.minedu.gob.bo/images/publicaciones/minedu/PortadaConvivencia.jpg',
            'descripcion' => 'Ministerio de Educación (2022). Lineamientos para la Construcción del Plan de Convivencia Pacífica y Armónica en Unidades Educativas. Primera Edición.',
            'tipo_id' => $tipo4->id,
        ]);
    }
}
