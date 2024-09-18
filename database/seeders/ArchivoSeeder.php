<?php

namespace Database\Seeders;

use App\Models\Archivo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $normativa_general1_id = BibliografiaSeeder::$normativa_general1->id;
        $normativa_general2_id = BibliografiaSeeder::$normativa_general2->id;
        $normativa_general3_id = BibliografiaSeeder::$normativa_general3->id;
        $normativa_general4_id = BibliografiaSeeder::$normativa_general4->id;
        $normativa_general5_id = BibliografiaSeeder::$normativa_general5->id;
        $normativa_general6_id = BibliografiaSeeder::$normativa_general6->id;
        $normativa_general7_id = BibliografiaSeeder::$normativa_general7->id;
        $normativa_general8_id = BibliografiaSeeder::$normativa_general8->id;
        $normativa_general9_id = BibliografiaSeeder::$normativa_general9->id;
        $normativa_general10_id = BibliografiaSeeder::$normativa_general10->id;
        $normativa_general11_id = BibliografiaSeeder::$normativa_general11->id;
        $normativa_general12_id = BibliografiaSeeder::$normativa_general12->id;

        $normativa_especifica1_id = BibliografiaSeeder::$normativa_especifica1->id;
        $normativa_especifica2_id = BibliografiaSeeder::$normativa_especifica2->id;
        $normativa_especifica3_id = BibliografiaSeeder::$normativa_especifica3->id;
        $normativa_especifica4_id = BibliografiaSeeder::$normativa_especifica4->id;
        $normativa_especifica5_id = BibliografiaSeeder::$normativa_especifica5->id;
        $normativa_especifica6_id = BibliografiaSeeder::$normativa_especifica6->id;
        $normativa_especifica7_id = BibliografiaSeeder::$normativa_especifica7->id;
        $normativa_especifica8_id = BibliografiaSeeder::$normativa_especifica8->id;
        $normativa_especifica9_id = BibliografiaSeeder::$normativa_especifica9->id;
        $normativa_especifica10_id = BibliografiaSeeder::$normativa_especifica10->id;
        $normativa_especifica11_id = BibliografiaSeeder::$normativa_especifica11->id;
        $normativa_especifica12_id = BibliografiaSeeder::$normativa_especifica12->id;
        $normativa_especifica13_id = BibliografiaSeeder::$normativa_especifica13->id;
        $normativa_especifica14_id = BibliografiaSeeder::$normativa_especifica14->id;
        $normativa_especifica15_id = BibliografiaSeeder::$normativa_especifica15->id;

        $politica_educativa1_id = BibliografiaSeeder::$politica_educativa1->id;
        $politica_educativa2_id = BibliografiaSeeder::$politica_educativa2->id;
        $politica_educativa3_id = BibliografiaSeeder::$politica_educativa3->id;


        $pedagogico_curricular1_id = BibliografiaSeeder::$pedagogico_curricular1->id;
        $pedagogico_curricular2_id = BibliografiaSeeder::$pedagogico_curricular2->id;
        $pedagogico_curricular3_id = BibliografiaSeeder::$pedagogico_curricular3->id;
        $pedagogico_curricular4_id = BibliografiaSeeder::$pedagogico_curricular4->id;
        $pedagogico_curricular5_id = BibliografiaSeeder::$pedagogico_curricular5->id;
        $pedagogico_curricular6_id = BibliografiaSeeder::$pedagogico_curricular6->id;
        $pedagogico_curricular7_id = BibliografiaSeeder::$pedagogico_curricular7->id;
        $pedagogico_curricular8_id = BibliografiaSeeder::$pedagogico_curricular8->id;

        //NORMATIVAS GENERALES
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/19nTSxaGjiPYEN3Xv3TVoW6-Sj8jFde-l/view',
            'bibliografia_id' =>  $normativa_general1_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1PolrkMlMy1OoSubdtKnkFP7rfTwIJEAQ/view',
            'bibliografia_id' => $normativa_general2_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1Y0GBQqhrx-vA1PcuuPsYT4Z4dA2gGb30/view',
            'bibliografia_id' => $normativa_general3_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1c-HHWOwyE0rXS0aN6T5DHkouZg7QTxc_/view',
            'bibliografia_id' => $normativa_general4_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1DDXBc4QTK6lY7xFtP8IEGnFKxs-Wx4jz/view',
            'bibliografia_id' => $normativa_general5_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1QF6bWXW3UmX57J_m4bGcDO5Mm5zKyDrV/view',
            'bibliografia_id' => $normativa_general6_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/16RvQbootDstaSTJnsg8TIgKOtNUec80U/view',
            'bibliografia_id' => $normativa_general7_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1e4lz445yLPRl_20IOIHL3kMtE3Krp0wR/view',
            'bibliografia_id' => $normativa_general8_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1nY58RXrztGBhCkCFXFfARYVLUY5ojYjI/view',
            'bibliografia_id' => $normativa_general9_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/13ucTzYBcf-Ixce6OeHyRBzEKS-6EaxSf/view',
            'bibliografia_id' => $normativa_general10_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/13sa9xWBL_xuhKF87sD9fbnASQOyBGkr5/view',
            'bibliografia_id' => $normativa_general11_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1lcz6qwD0D8BJZpK2ymB_i_-zXFpvfAbV/view',
            'bibliografia_id' => $normativa_general12_id,
        ]);

        //NORMATIVAS ESPECIFICAS
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1APowwtc7KfSF__VbXT5enf16kHfEB-lU/view',
            'bibliografia_id' => $normativa_especifica1_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/16yWRSki97c2cj-ZWxO_wY7G_W9tZfpZp/view',
            'bibliografia_id' => $normativa_especifica2_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1-9OHlFo9yYLVltr5dT_MHYOeJmZc1c_T/view',
            'bibliografia_id' => $normativa_especifica3_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1b2z0Kp39REbxkZHb96_m8iNJ3FTRcjKO/view',
            'bibliografia_id' => $normativa_especifica4_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1kY5dYmyxv45-0btynknuChk6GcbgNk30/view',
            'bibliografia_id' => $normativa_especifica5_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/17IbHx8JwIcEqNM5GCvtLgZVf1WEWdtZI/view',
            'bibliografia_id' => $normativa_especifica6_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1sREowLbrMZ3luDFH2R_RrkHlBWFvuMdS/view',
            'bibliografia_id' => $normativa_especifica7_id,
        ]);


        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1CwKzF5b9Xlw4ZaMV-rt3t7oNjGETaD77/view',
            'observation_title' => 'Regular',
            'bibliografia_id' => $normativa_especifica8_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1_a2lquS1Kh2WO5CsEQyJY1MQkB8SpH6P/view',
            'observation_title' => 'Alternativa y Especial',
            'bibliografia_id' => $normativa_especifica8_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1j2s-pDkufveDlg1Pd6EqlHu_z0fsT_vG/view',
            'observation_title' => 'Superior',
            'bibliografia_id' => $normativa_especifica8_id,
        ]);
        
        
        
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1KVh87tFEYGi3XaC5dKqaJm0aWBxQSp_0/view',
            'bibliografia_id' => $normativa_especifica9_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1CzMhXh4-Y8N5ATz-TQgE9-m_HYie5ipm/view',
            'bibliografia_id' => $normativa_especifica10_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1moQ9iXbb57JlGnqf8B2xS-_kZ5dD5EWc/view',
            'bibliografia_id' => $normativa_especifica11_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1Tpyp3Eg61fB3F7jI3tsrGto7tsbBZJkn/view',
            'bibliografia_id' => $normativa_especifica12_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1-VeUqd0KZj2X6fTxmFht9dfTPA0nLWDI/view',
            'bibliografia_id' => $normativa_especifica13_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1lCYVxUmocBKsjh1lZag8bGf-uzoZVuAI/view',
            'bibliografia_id' => $normativa_especifica14_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1nNytB7T1pfh9XAAsk3bbNkc35uKaDidI/view',
            'bibliografia_id' => $normativa_especifica15_id,
        ]);

        //POLITICAS EDUCATIVAS
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1ps4Ahy1Y24odjgLOECRvOn0Se-UYIpRI/view',
            'bibliografia_id' => $politica_educativa1_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1o0oaJ_egcDtKUtnaOLKJPFnpGpGFyNN1/view',
            'bibliografia_id' => $politica_educativa2_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1UtEZ4WMAvxuIIdMNUO7YgrN8oAQDWQd8/view',
            'bibliografia_id' => $politica_educativa3_id,
        ]);

        //PEDAGÓGICO CURRICULAR (SER)
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1xEbm44vcHGAVukUwt1A_vafPaJ_ig1wh/view',
            'bibliografia_id' => $pedagogico_curricular1_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1CvF-OWshpRCg8FaSSLu0icB_Tkjb0XxW/view',
            'bibliografia_id' => $pedagogico_curricular2_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1COIlijK4oOho4igd0oTZdOfbp9FES8FR/view',
            'bibliografia_id' => $pedagogico_curricular3_id,
        ]);


        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1EVQVuOOqO5qyuSWjdDZbOW1E58q3B5-j/view',
            'observation_title' => 'Inicial',
            'bibliografia_id' => $pedagogico_curricular4_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1dMuYDOajEl2b0XFKVbuG4FDPkqZl7sxe/view',
            'observation_title' => 'Primaria',
            'bibliografia_id' => $pedagogico_curricular4_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1yyJnw4TIL83nPp8XzclEAs9L_DcPU_NM/view',
            'observation_title' => 'Secundaria',
            'bibliografia_id' => $pedagogico_curricular4_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1mAbB3mQjmkLjoQffLXZMO-SPJMhgDrIx/view',
            'bibliografia_id' => $pedagogico_curricular5_id,
        ]);
        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1hijCwk9Wicl4NiAhNWb0WO_IsuNRCFWD/view',
            'bibliografia_id' => $pedagogico_curricular6_id,
        ]);

        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1diYpOkY5sGab8gZylwaA7Vp59aJJssmp/view',
            'bibliografia_id' => $pedagogico_curricular7_id ,
        ]);

        Archivo::create([
            'path' => 'https://drive.google.com/file/d/1z-Ygm759XiBzNm__Rrgl7iYnky7H80xz/view',
            'bibliografia_id' => $pedagogico_curricular8_id ,
        ]);
       
    }
}
