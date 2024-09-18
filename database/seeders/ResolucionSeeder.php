<?php

namespace Database\Seeders;

use App\Models\Resolucion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ResolucionSeeder::create([
        //     'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0558/2024',
        //     'descripcion' => '',
        //     'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/03659044.pdf',
        // ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0558/2024',
            'descripcion' => 'Artículo 1. (MODIFICACIÓN). Modificar el Parágrafo II del Artículo 2 de la Resolución Ministerial N\' 0312/2024 de 29 de abril de 2024 que aprueba el Congreso Plurinacional de Educación, con el siguiente texto: "II. La Comisión Organizadora del Congreso Plurinacional de Educación definirá su composición mediante reglamentación específica."',
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/03659044.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0536/2024',
            'descripcion' => 'Artículo 1. (APROBACIÓN). Aprobar el REGLAMENTO DE CUMPLIMIENTO DE CARGA HORARIA PARA MAESTRAS Y MAESTROS DE CENTROS DE EDUCACIÓN ESPECIAL FISCALES Y DE CONVENIO que en Anexo, constituye parte integrante e indivisible del presente instrumento normativo.',
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/0536.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0191/2024',
            'descripcion' => 'Artículo 1.- (APROBACIÓN). Aprobar dos (2) alfabetos de los idiomas de las Naciones y Pueblos Indígena, Originario, Campesinos; GUARANÍ y AFROBOLIVIANO, que en Anexo forma parte integrante de la presente Resolución Ministerial.',
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/RM0191-24_subido1.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0287/2024',
            'descripcion' => 'Artículo 1.- (MODIFICACIÓN). I. Modificar los Parágrafos IV y V del Artículo 14 de las Normas Generales para la Gestión Educativa 2024 del Subsistema de Educación Regular, aprobada entre otras, mediante Resolución Ministerial N° 0001/2024 de 02 de enero de 2024, con el siguiente texto:\n\n\"IV. Está prohibido rechazar a estudiantes por motivo de discapacidad, tanto en el proceso de inscripción como en todo el proceso educativo.\n\nV. Una vez matriculada la o el estudiante con discapacidad en una unidad educativa inclusiva, en cumplimiento a la matriculación simultánea, la o el estudiante se inscribirá en un Centro de Educación Especial (de manera obligatoria) en el que se asignará una o un maestro de apoyo técnico pedagógico.\"',
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/VER/2024/287.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0256/2024',
            'descripcion' => 'Artículo 1.- (APROBACIÓN). Aprobar el MANUAL DE PROCEDIMIENTOS PARA EL RECONOCIMIENTO DE UN (1) AÑO DE SERVICIO DOCENTE EN EL ASCENSO DE CATEGORÍA O DIEZ (10) PUNTOS EN MÉRITOS PROFESIONALES a Maestras y Maestros que hayan participado en las siguientes actividades:\n\n- Ser tutora o Tutor de estudiantes ganadores de la Medalla de Oro en la Olimpiada Científica Estudiantil Plurinacional Boliviana.\n- Ser Entrenadora o Entrenador de estudiantes ganadores de la Medalla de Oro en los Juegos Deportivos Estudiantiles Plurinacionales.\n- Ser Entrenadora o Entrenador de estudiantes que obtengan el Primer Lugar en el Encuentro Plurinacional de Maestras y Maestros Educa Innova.',
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/DGAA/resoluciones/03649365.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0263/2024. REGLAMENTO DEL SISTEMA PLURINACIONAL DE ARCHIVOS Y BIBLIOTECAS',
            'descripcion' => 'ARTÍCULO 1.- (APROBACIÓN). Aprobar Reglamento del Sistema Plurinacional de Archivos y Bibliotecas, en sus tres (3) Capítulos, diecinueve (19) Artículos, dos (2) Disposiciones Finales, que en anexo forma parte integrante de la presente Resolución Ministerial.',
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/03649367.pdf',
        ]);

        

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0322/2024',
            'descripcion' => "Artículo 1.- (APROBACIÓN).\n\n" .
        "I. Aprobar la \"CONVOCATORIA DE ASCENSO DE CATEGORÍA PARA MAESTRAS Y MAESTROS DE LOS SUBSISTEMAS DE EDUCACIÓN REGULAR, ALTERNATIVA Y ESPECIAL, Y ESCUELAS SUPERIORES DE FORMACIÓN DE MAESTROS — GESTIÓN 2024\", que en Anexo, constituye parte integrante e indivisible de la presente disposición normativa.\n\n" .
        "II. Aprobar la \"CONVOCATORIA DE ASCENSO DE CATEGORÍA PARA EL PERSONAL ADMINISTRATIVO DE LOS SUBSISTEMAS DE EDUCACIÓN REGULAR, ALTERNATIVA Y ESPECIAL, Y ESCUELAS SUPERIORES DE FORMACIÓN DE MAESTROS — GESTIÓN 2024\", que en Anexo, forma parte integrante e indivisible del presente instrumento normativo.\n\n" .
        "III. Aprobar la \"CONVOCATORIA DE ASCENSO DE CATEGORÍA PARA EL PERSONAL DIRECTIVO, DOCENTE Y ADMINISTRATIVO DE INSTITUTOS TÉCNICOS, TECNOLÓGICOS Y DE FORMACIÓN ARTÍSTICA, DEPENDIENTE DE LA DGESTTLA DEL SUBSISTEMA DE EDUCACIÓN SUPERIOR DE FORMACIÓN PROFESIONAL — GESTIÓN 2024\", que en Anexo, constituye parte integrante e indivisible de la presente Resolución Ministerial.\n\n" .
        "IV. Aprobar las DIRECTRICES PARA LA ELABORACIÓN DE \"PROPUESTA TRANSFORMADORA HACIA LA CALIDAD EDUCATIVA\", MODALIDAD: MAESTRAS Y MAESTROS DE LOS SUBSISTEMAS DE EDUCACIÓN REGULAR, ALTERNATIVA Y ESPECIAL, Y ESCUELAS SUPERIORES DE FORMACIÓN DE MAESTROS, que en Anexo, forma parte integrante de la presente disposición normativa.\n\n" .
        "V. Aprobar las DIRECTRICES PARA LA ELABORACIÓN DE \"PROPUESTA TRANSFORMADORA HACIA LA CALIDAD EDUCATIVA\", MODALIDAD: PERSONAL ADMINISTRATIVO (SECRETARIAS/OS Y ASISTENTES ADMINISTRATIVOS) DE LOS SUBSISTEMAS DE EDUCACIÓN REGULAR, ALTERNATIVA Y ESPECIAL, Y ESCUELAS SUPERIORES DE FORMACIÓN DE MAESTROS, que en Anexo, forma parte integrante de la presente resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/RM_0322-2024.pdf',
        ]);
        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0259/2024',
            'descripcion' => "Artículo 1.- (APROBACIÓN). Aprobar el Reglamento para la Constitución de Centros de Educación Alternativa Integrados, en sus Cinco (5) Capítulos, Ventiún (21) Artículos, Dos (2) Disposiciones Finales y Cuatro (4) Disposiciones Transitorias, que en anexo forman parte integrante de la presente Resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/VEAyE/2024/resoluciones/RM_0259-2024.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0222/2024',
            'descripcion' => "ARTÍCULO 1.- (APROBACIÓN). Aprobar el Reglamento para la implementación de la Educación Primaria Itinerante, en sus Tres (3) Capítulos, Dieciocho (18) Artículos, Dos (2) Disposiciones Transitorias, Cuatro (4) Disposiciones Finales y Tres (3) Anexos, documentos que forman parte integrante de la presente Resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/VEAyE/2024/resoluciones/RM_0259-2024.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0186/2024',
            'descripcion' => "ARTÍCULO 1.- (APROBACIÓN). Aprobar el Reglamento para la Evaluación de Procesos y Programas de Atención Educativa de Estudiantes con Discapacidad y Dificultades en el Aprendizaje — Modalidad Directa, en sus Diez (10) Capítulos, Ciento Tres (103) Artículos, Una (1) Disposición Transitoria y dos (2) Disposiciones Finales, que en anexos forma parte integrante de la presente Resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/VEAyE/2024/resoluciones/RM_N_0186_-_2024.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0183/2024',
            'descripcion' => "ARTÍCULO 1.- (APROBACIÓN). Aprobar los siguientes Reglamentos:\n\nReglamento de Evaluación de Procesos Formativos del Área de Educación de Personas Jóvenes y Adultas, en sus ocho (8) Capítulos, Treinta y Un (31) Artículos y Tres (3) Disposiciones Finales.\nReglamento de Evaluación de Procesos Formativos del Área de Educación Permanente No Escolarizada, en sus dos (2) Capítulos, Diez y Siete (17) Artículos, Dos (2) Disposiciones Finales y Dos Disposiciones Transitorias.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/RM_N_0183_-2024.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0143/2024',
            'descripcion' => "Artículo 1. (DESIGNACIÓN). Designar como REPRESENTANTE DEL MINISTERIO DE EDUCACIÓN, PARA LAS SESIONES DEL COMITÉ PLURINACIONAL DE TECNOLOGÍAS DE INFORMACIÓN Y COMUNICACIÓN — COPLUTIC al ciudadano Eloterio Choque Mamani, Director General de Asuntos Administrativos del Ministerio de Educación, debiendo asistir a las Sesiones Ordinarias y Extraordinarias del referido Comité, a partir de su legal notificación con la presente Resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/03647563.pdf',
        ]);
        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0112/2024',
            'descripcion' => "Artículo 1.- (APROBACIÓN). Aprobar la traducción de siete (7) Diccionarios en los idiomas de las Naciones y Pueblos Indígena Originario Campesinos, como documentos oficiales en el Sistema Educativo Plurinacional, que en Anexos forman parte integrante de la presente Resolución Ministerial, de acuerdo al siguiente detalle.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/RM-0112_2024.PDF',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0108/2024',
            'descripcion' => "Artículo 1.- (MODIFICACIÓN). Modificar los LINEAMIENTOS METODOLÓGICOS — EDUCACIÓN PERMANENTE NO ESCOLARIZADA. aprobado entre otros. mediante Resolución Ministerial N° 1040/2022 de 22 de noviembre de 2022, de acuerdo al Anexo 1 que constituye parte integrante de la presente Resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/VEAyE/2024/resoluciones/03647562.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0114/2024',
            'descripcion' => "Artículo 1.- (APROBACIÓN). Aprobar veintiséis (26) G1 sarios en los idiomas de las Naciones y Pueblos Indígena Originario Campesinos. como documentos oficiales en el Sistema Educativo Plurinacional, que en Anexos forman parte integrante de la presente Resolución Ministerial. de acuerdo al siguiente detalle.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/RM-0114_2024.PDF',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0125/2024',
            'descripcion' => "Artículo 1.- (APROBACIÓN). Aprobar el Lineamiento del Himno Nacional del Estado Plurinacional de Bolivia en los idiomas de las Naciones y Pueblos Indígena, Originario, Campesinos y Afrobolivianos, que en Anexo forma parte integrante de la presente Resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2024/03647633.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0968/2023',
            'descripcion' => "Artículo 1.- (MODIFICACIÓN). Aprobar la modificación del Cronograma del Proceso de Institucionalización establecida en el Parágrafo III de la Convocatoria Pública N° 0001/2023, de Institucionalización de cargos directivos del Sistema Educativo Plurinacional, por las gestiones educativas 2024, 2025 y 2026, aprobado mediante Resolución Ministerial N° 0820/2023 de 22 de septiembre de 2023, referente a la inscripción de postulantes y la publicación de la lista oficial de postulantes habilitados, de acuerdo al siguiente detalle:",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/VER/2023/resoluciones/03638111.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0994/2023',
            'descripcion' => "Artículo 1. (MODIFICACIÓN). Aprobar la modificación del Cronograma del Proceso de Institucionalización establecida en el Parágrafo III de la Convocatoria Pública N° 0001/2023, de Institucionalización de cargos directivos del Sistema Educativo Plurinacional, por las gestiones educativas 2024, 2025 y 2026, aprobado mediante Resolución Ministerial N° 0820/2023 de 22 de septiembre de 2023, de acuerdo al cuadro adjunto que en Anexo, constituye parte integrante e indivisible de la presente disposición normativa.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2023/03636780.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0870/2023',
            'descripcion' => "Artículo 1. (APROBACIÓN). Aprobar el \"Reglamento de la Convocatoria Pública N° 0001/2023, de Institucionalización de Cargos Directivos del Sistema Educativo Plurinacional, por las Gestiones Educativas 2024, 2025 y 2026\", que en Anexo, constituye parte integrante e indivisible del presente instrumento normativo.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2023/870_2023_compressed.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0950/2023',
            'descripcion' => "Artículo 1.- (MODIFICACIÓN). Aprobar la modificación del Cronograma del Proceso de Institucionalización establecida en el Parágrafo III de la Convocatoria Pública N° 0001/2023, de Institucionalización de cargos directivos del Sistema Educativo Plurinacional, por las gestiones educativas 2024, 2025 y 2026, aprobado mediante Resolución Ministerial N° 0820/2023 de 22 de septiembre de 2023, referente a la inscripción de postulantes y la publicación de la lista oficial de postulantes habilitados, de acuerdo al siguiente detalle.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/DGAA/resoluciones/03638664.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0789/2023',
            'descripcion' => "Artículo 1. (Aprobación). Aprobar el \"Reglamento Interno de Archivo y Gestión Documental\" y sus Anexos que forman parte integrante de la presente Resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/DGAA/resoluciones/RM_REGLAMENTO_DE_ARCHIVO_INTERNO_compressed.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0244/2023',
            'descripcion' => "Artículo 1.- (APROBACIÓN) Aprobar el \"REGLAMENTO DEL BACHILLERATO TÉCNICO HUMANÍSTICO DEL SUBSISTEMA DE EDUCACIÓN REGULAR Y SUBSISTEMA DE EDUCACIÓN ALTERNATIVA Y ESPECIAL\".",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/reglamentos/2023/REGLAMENTO-BACHILLERATO_TECNICO_HUNISTICO_DEL_SUBSISTEMA_DE_EDUCACION_REGULAR_Y_SUBSISTEMA_DE_EDUCACION_ALTERNATIVA.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0575/2023',
            'descripcion' => "Artículo 1. (APROBACIÓN). La presente Resolución Ministerial tiene por objeto modificar el cronograma de la \"CONVOCATORIA DE ASCENSO DE CATEGORÍA PARA MAESTRAS Y MAESTROS DE LOS SUBSISTEMAS DE EDUCACIÓN REGULAR, ALTERNATIVA Y ESPECIAL Y ESCUELAS SUPERIORES DE FORMACIÓN DE MAESTROS - GESTIÓN 2023 Y LA CONVOCATORIA DE ASCENSO DE CATEGORÍA PARA EL PERSONAL ADMINISTRATIVO DE LOS SUBSISTEMAS DE EDUCACIÓN REGULAR, ALTERNATIVA Y ESPECIAL Y ESCUELAS SUPERIORES DE FORMACIÓN DE MAESTROS - GESTIÓN 2023\", aprobada mediante Resolución Ministerial N° 0390/2023 de 26 de mayo de 2023, con el siguiente texto:",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2023/RM0575-2023.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0390/2023',
            'descripcion' => "Artículo 1. (Aprobación). I. Aprobar la CONVOCATORIA DE ASCENSO DE CATEGORÍA PARA MAESTRAS Y MAESTROS DE LOS SUBSISTEMAS DE EDUCACIÓN REGULAR, ALTERNATIVA Y ESPECIAL, ESCUELAS SUPERIORES DE FORMACIÓN DE MAESTROS - GESTIÓN 2023, que en Anexo, constituye parte integrante e indivisible de la presente disposición normativa.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2023/RM-0390-2023.pdf',
        ]);


        Resolucion::create([
            'titulo' => 'RESOLUCIÓN ADMINISTRATIVA No. DGAA 006/2023 DESC/B-005/2023',
            'descripcion' => "ARTÍCULO ÚNICO.- Anular el proceso de contratación \"ADQUISICIÓN DE KITs DE ROBÓTICA\" DESC/B-005/2023, hasta el vicio más antiguo, es decir hasta la autorización del inicio del proceso de contratación, en estricto cumplimiento a lo establecido en el numeral 10 del Documento Base de Contratación y el parágrafo I del Artículo 9 del Reglamento para la Administración, Uso y Destino de Recursos Provenientes de los Descuentos por Paros, Huelgas e Inasistencias Injustificadas del Personal Docente y Administrativo del Magisterio Fiscal, generados a partir de la gestión 2016 hasta la gestión 2021.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2023/RESOLUCIN_DE_ANULACIN_KITs_DE_ROBTICA.pdf',
        ]);


        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL 001/2023',
            'descripcion' => "NORMAS GENERALES PARA LA GESTIÓN EDUCATIVA 2023\n\nEl presente instrumento técnico, pedagógico y normativo tiene por objeto regular los procedimientos de planificación, organización, ejecución, acompañamiento y evaluación de la Gestión Educativa y Escolar de la Gestión del año 2023, en el marco del Modelo Educativo Sociocomunitario Productivo, establecido en la Ley N° 070 de 20 de diciembre de 2010, de la Educación “Avelino Siñani - Elizardo Pérez”.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/Resolucion_0001_2023Regular.pdf',
        ]);


        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0656/2022. REGLAMENTO INTERNO DE PERSONAL',
            'descripcion' => "Artículo 1. (Aprobación). Aprobar el Reglamento Interno de Personal (RIP) del Ministerio de Educación, en sus dos (2) Partes, seis (6) Capítulos, cincuenta y tres (53) Artículos y dos (2) Apéndices, que en Anexo forma parte indisoluble de la presente Resolución Ministerial.",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/2022/RM_656-2022_1_RIP.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0072/2022. SUBSISTEMA DE EDUCACIÓN REGULAR Y SUBSISTEMA DE EDUCACIÓN ALTERNATIVA Y ESPECIAL.',
            'descripcion' => "Artículo 1.- (APROBACIÓN). REGLAMENTO DE PERMUTAS DE LOS SUBSISTEMAS DE EDUCACIÓN REGULAR Y EDUCACIÓN ALTERNATIVA Y ESPECIAL en sus 11 artículos y 3 Disposiciones Finales…",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/0072-2022-REGULAR-ALTERNATIVA.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0071/2022. SUBSISTEMA DE EDUCACIÓN REGULAR Y SUBSISTEMA DE EDUCACIÓN ALTERNATIVA Y ESPECIAL.',
            'descripcion' => "Artículo 1.- (APROBACIÓN). Se aprueba el \"REGLAMENTO DE SELECCIÓN Y DESIGNACIÓN DE MAESTRAS Y MAESTROS, PERSONAL ADMINISTRATIVO Y DE SERVICIO DEL SUBSISTEMA DE EDUCACIÓN REGULAR Y SUBSISTEMA DE EDUCACIÓN ALTERNATIVA Y ESPECIAL\".",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/0071-2022-REGULAR-ALTERNATIVA.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0045/2022. SUBSISTEMA DE EDUCACIÓN REGULAR',
            'descripcion' => "Articulo 1.- (APROBACIÓN). I. Aprobar la tabla de ajuste porcentual a las mensualidades de las Unidades Educativas Privadas del Subsistema de Educación Regular para la Gestión 2022…",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/0045_REGULAR_2022.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL N° 0039/2022. SUBSISTEMA DE EDUCACIÓN REGULARR',
            'descripcion' => "Artículo 1. (Aprobación). Aprobar las modificaciones en los Artículos pertinentes de las Normas Generales para la Gestión Educativa 2022 del Subsistema de Educación Regular, aprobada entre otras, mediante Resolución Ministerial N° 0001/2022 de 3 de enero de 2022...",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/0039_REGULAR_2022.pdf',
        ]);

        Resolucion::create([
            'titulo' => 'RESOLUCIÓN MINISTERIAL 001/2022',
            'descripcion' => "Subsistema de Educación Regular",
            'archivo_path' => 'https://www.minedu.gob.bo/files/documentos-normativos/resoluciones-ministeriales/001-REGULAR_2022_MOD.pdf',
        ]);
    }
}
