<?php

namespace Database\Seeders;

use App\Models\Denuncia;
use App\Models\Denunciante;
use App\Models\FormularioDenuncia;
use App\Models\PersonaDenunciada;
use App\Models\RelacionHechoDenuncia;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormularioDenunciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //DENUNCIA #1
        $denunciante1 = Denunciante::create([
            'nombre' => 'DIEGO HURTADO VARGAS',
            'carnet' => '7777326',
            'direccion' => 'Barrio 23 de Octubre',
            'mantener_identidad_reserva' => 0,
            'correo_electronico' => 'diegohurtado2412@gmail.com',
            'telefono' => '71310964',
            'seguimiento' => 1,
        ]);

        $denuncia1 = Denuncia::create([
            'direccion_general' => '5to. Anillo',
            'unidad_educativa' => 'Modulo Educativo Flamingo',
            'distrito' => 'Distrito 10',
            'zona' => 'Zona Sur',
            'barrio' => 'Barrio Flamingo',
            'referencia' => 'A dos cuadras de la doble vía La Guardia',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Jorge Arturo',
            'cargo' => 'Profesor de Educación Física',
            'denuncia_id' => $denuncia1->id,

        ]);
        PersonaDenunciada::create([
            'nombre' => 'Marco Antonio',
            'cargo' => 'Director',
            'denuncia_id' => $denuncia1->id,

        ]);
        $relacionHechoDenuncia1 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 1),
            'hora_hecho' => '12:00:00',
            'lugar_hecho' => 'Afuera del colegio',
            'descripcion_hecho' => 'Dos jóvenes de la promoción se golpearon y llegaron a lastimar a un niño, habia un profesor presente y no hizo nada',
            'fecha_denuncia' => Carbon::create(2024, 7, 15),
            'hora_denuncia' => '09:30:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia1->id,
            'denunciante_id' => $denunciante1->id,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia1->id,
        ]);


        //DENUNCIA #2
        // $denunciante2 = Denunciante::create([
        //     'nombre' => 'LUIS PEREZ VELARDE',
        //     'carnet' => '3902036',
        //     'direccion' => 'Barrio Wapilo',
        //     'mantener_identidad_reserva' => 1,
        //     'correo_electronico' => 'luisperez123@gmail.com',
        //     'telefono' => '78890155',
        //     'seguimiento' => 0,
        // ]);

        $denuncia2 = Denuncia::create([
            'direccion_general' => 'Av. Moscú',
            'unidad_educativa' => 'El Carmen',
            'distrito' => 'Distrito 12',
            'zona' => 'Zona Sur',
            'barrio' => 'Barrio El Cármen',
            'referencia' => 'Sobre la Av. Moscú',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Martin Choque Duran',
            'cargo' => 'Estudiante de la Promoción',
            'denuncia_id' => $denuncia2->id,
        ]);
        PersonaDenunciada::create([
            'nombre' => 'Jouse Jimenez Vasquez',
            'cargo' => 'Profesor de Biología',
            'denuncia_id' => $denuncia2->id,
        ]);
        $relacionHechoDenuncia2 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 10),
            'hora_hecho' => '11:15:00',
            'lugar_hecho' => 'Aula 204, Edificio A',
            'descripcion_hecho' => 'Discusión entre dos estudiantes durante la clase de matemáticas.',
            'fecha_denuncia' => Carbon::create(2024, 7, 11),
            'hora_denuncia' => '09:30:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia2->id,
            'denunciante_id' => $denunciante2?->id ?? null,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia2->id,
        ]);



        //DENUNCIA #3
        $denunciante3 = Denunciante::create([
            'nombre' => 'MARIA TERESA RODRIGUEZ ZABALA',
            'carnet' => '8743229',
            'direccion' => 'Barrio La Colorada #885 Zona Este',
            'mantener_identidad_reserva' => 0,
            'correo_electronico' => 'mariateresa@gmail.com',
            'telefono' => '77645454',
            'seguimiento' => 1,
        ]);

        $denuncia3 = Denuncia::create([
            'direccion_general' => 'Avenida Mercosur #12',
            'unidad_educativa' => 'La Colorada',
            'distrito' => 'Distrito 1',
            'zona' => 'Zona Este',
            'barrio' => 'Barrio La Colorada',
            'referencia' => 'A 2 cuadras del mercado La Colorada',
        ]);


        $relacionHechoDenuncia3 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 10),
            'hora_hecho' => '18:00:00',
            'lugar_hecho' => 'Barrio La Colorada',
            'descripcion_hecho' => 'Un profesor trató mal a su estudiante, lo insultó y denigró. El estudiante pertenece a la promoción.',
            'fecha_denuncia' => Carbon::create(2024, 7, 15),
            'hora_denuncia' => '12:30:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia3->id,
            'denunciante_id' => $denunciante3->id,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia3->id,
        ]);




        //DENUNCIA #4
        $denunciante4 = Denunciante::create([
            'nombre' => 'ROBERTO PACHECO VARGAS',
            'carnet' => '6789012',
            'direccion' => 'Calle Flores #789 Zona Sur',
            'mantener_identidad_reserva' => 0,
            'correo_electronico' => 'roberto.pacheco@gmail.com',
            'telefono' => '73345678',
            'seguimiento' => 1,
        ]);

        $denuncia4 = Denuncia::create([
            'direccion_general' => 'Avenida Central',
            'unidad_educativa' => 'Escuela Central',
            'distrito' => 'Distrito 5',
            'zona' => 'Zona Sur',
            'barrio' => 'Barrio Central',
            'referencia' => 'Al lado del centro cultural Central',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Juan Torres',
            'cargo' => 'Profesor de Química',
            'denuncia_id' => $denuncia4->id,
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Elena Ríos',
            'cargo' => 'Estudiante',
            'denuncia_id' => $denuncia4->id,
        ]);

        $relacionHechoDenuncia4 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 29),
            'hora_hecho' => '13:00:00',
            'lugar_hecho' => 'Laboratorio de Química',
            'descripcion_hecho' => 'Un profesor fue acusado de maltratar verbalmente a una estudiante durante un experimento.',
            'fecha_denuncia' => Carbon::create(2024, 7, 30),
            'hora_denuncia' => '14:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia4->id,
            'denunciante_id' => $denunciante4->id,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia4->id,
        ]);


        //DENUNCIA #5
        // $denunciante5 = Denunciante::create([
        //     'nombre' => 'JUAN PEREZ GARCIA',
        //     'carnet' => '8743230',
        //     'direccion' => 'Calle Falsa #123 Zona Norte',
        //     'mantener_identidad_reserva' => 1,
        //     'correo_electronico' => 'juanperez@gmail.com',
        //     'telefono' => '77645455',
        //     'seguimiento' => 1,
        // ]);

        $denuncia5 = Denuncia::create([
            'direccion_general' => 'Avenida Siempre Viva #456',
            'unidad_educativa' => 'La Falsa',
            'distrito' => 'Distrito 2',
            'zona' => 'Zona Norte',
            'barrio' => 'Barrio Siempre Viva',
            'referencia' => 'Cerca del parque Siempre Viva',
        ]);

        $relacionHechoDenuncia5 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 11),
            'hora_hecho' => '14:00:00',
            'lugar_hecho' => 'Barrio Siempre Viva',
            'descripcion_hecho' => 'Un estudiante fue golpeado por otro estudiante. El estudiante agredido pertenece al segundo año.',
            'fecha_denuncia' => Carbon::create(2024, 7, 16),
            'hora_denuncia' => '11:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia5->id,
            'denunciante_id' => $denunciante5?->id ?? null,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia5->id,
        ]);




        // DENUNCIA #6
        $denunciante6 = Denunciante::create([
            'nombre' => 'CARLA FERNANDEZ LOPEZ',
            'carnet' => '6543210',
            'direccion' => 'Calle Los Pinos #456 Zona Oeste',
            'mantener_identidad_reserva' => 0,
            'correo_electronico' => 'carla.fernandez@gmail.com',
            'telefono' => '71234567',
            'seguimiento' => 1,
        ]);

        $denuncia6 = Denuncia::create([
            'direccion_general' => 'Avenida Pinos Altos',
            'unidad_educativa' => 'Unidad Educativa Pinos Altos',
            'distrito' => 'Distrito 3',
            'zona' => 'Zona Oeste',
            'barrio' => 'Barrio Los Pinos',
            'referencia' => 'Frente al parque Los Pinos',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Ana Maria',
            'cargo' => 'Profesora de Matemáticas',
            'denuncia_id' => $denuncia6->id,
        ]);

        $relacionHechoDenuncia6 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 12),
            'hora_hecho' => '10:00:00',
            'lugar_hecho' => 'Aula 101',
            'descripcion_hecho' => 'Una profesora agredió verbalmente a un estudiante durante la clase.',
            'fecha_denuncia' => Carbon::create(2024, 7, 13),
            'hora_denuncia' => '09:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia6->id,
            'denunciante_id' => $denunciante6->id,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia6->id,
        ]);

        // DENUNCIA #7
        $denunciante7 = Denunciante::create([
            'nombre' => 'RICARDO MORALES PEREZ',
            'carnet' => '1234567',
            'direccion' => 'Barrio San Pedro #789 Zona Norte',
            'mantener_identidad_reserva' => 1,
            'correo_electronico' => 'ricardo.morales@gmail.com',
            'telefono' => '78901234',
            'seguimiento' => 1,
        ]);

        $denuncia7 = Denuncia::create([
            'direccion_general' => 'Calle San Pedro',
            'unidad_educativa' => 'Colegio San Pedro',
            'distrito' => 'Distrito 4',
            'zona' => 'Zona Norte',
            'barrio' => 'Barrio San Pedro',
            'referencia' => 'A tres cuadras de la iglesia San Pedro',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Carlos Alberto',
            'cargo' => 'Profesor de Historia',
            'denuncia_id' => $denuncia7->id,
        ]);

        $relacionHechoDenuncia7 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 14),
            'hora_hecho' => '11:30:00',
            'lugar_hecho' => 'Biblioteca',
            'descripcion_hecho' => 'Un profesor fue visto acosando a una estudiante en la biblioteca.',
            'fecha_denuncia' => Carbon::create(2024, 7, 15),
            'hora_denuncia' => '10:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia7->id,
            'denunciante_id' => $denunciante7->id,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia7->id,
        ]);

        // DENUNCIA #8
        // $denunciante8 = Denunciante::create([
        //     'nombre' => 'LAURA MENDEZ CASTRO',
        //     'carnet' => '8765432',
        //     'direccion' => 'Calle Los Almendros #321 Zona Centro',
        //     'mantener_identidad_reserva' => 1,
        //     'correo_electronico' => 'laura.mendez@gmail.com',
        //     'telefono' => '72345678',
        //     'seguimiento' => 1,
        // ]);

        $denuncia8 = Denuncia::create([
            'direccion_general' => 'Avenida Los Almendros',
            'unidad_educativa' => 'Instituto Los Almendros',
            'distrito' => 'Distrito 5',
            'zona' => 'Zona Centro',
            'barrio' => 'Barrio Los Almendros',
            'referencia' => 'Junto al centro comercial Los Almendros',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Mario Sanchez',
            'cargo' => 'Estudiante',
            'denuncia_id' => $denuncia8->id,
        ]);

        $relacionHechoDenuncia8 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 16),
            'hora_hecho' => '13:00:00',
            'lugar_hecho' => 'Patio del colegio',
            'descripcion_hecho' => 'Un estudiante fue visto vendiendo sustancias prohibidas a otros estudiantes.',
            'fecha_denuncia' => Carbon::create(2024, 7, 17),
            'hora_denuncia' => '08:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia8->id,
            'denunciante_id' => $denunciante8?->id ?? null,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia8->id,
        ]);



        // DENUNCIA #9
        $denunciante9 = Denunciante::create([
            'nombre' => 'ANA GUTIERREZ SALINAS',
            'carnet' => '5432109',
            'direccion' => 'Calle Los Rosales #678 Zona Central',
            'mantener_identidad_reserva' => 1,
            'correo_electronico' => 'ana.gutierrez@gmail.com',
            'telefono' => '73456789',
            'seguimiento' => 1,
        ]);

        $denuncia9 = Denuncia::create([
            'direccion_general' => 'Avenida Los Rosales',
            'unidad_educativa' => 'Escuela Los Rosales',
            'distrito' => 'Distrito 6',
            'zona' => 'Zona Central',
            'barrio' => 'Barrio Los Rosales',
            'referencia' => 'Cerca del hospital Los Rosales',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Patricia Lopez',
            'cargo' => 'Profesora de Inglés',
            'denuncia_id' => $denuncia9->id,
        ]);

        $relacionHechoDenuncia9 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 18),
            'hora_hecho' => '10:30:00',
            'lugar_hecho' => 'Salón de actos',
            'descripcion_hecho' => 'Una profesora fue acusada de discriminación verbal hacia un estudiante durante una presentación.',
            'fecha_denuncia' => Carbon::create(2024, 7, 19),
            'hora_denuncia' => '11:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia9->id,
            'denunciante_id' => $denunciante9->id,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia9->id,
        ]);

        // DENUNCIA #10
        $denunciante10 = Denunciante::create([
            'nombre' => 'MARIO GOMEZ HERRERA',
            'carnet' => '2109876',
            'direccion' => 'Avenida Principal #789 Zona Sur',
            'mantener_identidad_reserva' => 0,
            'correo_electronico' => 'mario.gomez@gmail.com',
            'telefono' => '74567890',
            'seguimiento' => 0,
        ]);

        $denuncia10 = Denuncia::create([
            'direccion_general' => 'Avenida Principal',
            'unidad_educativa' => 'Colegio Principal',
            'distrito' => 'Distrito 7',
            'zona' => 'Zona Sur',
            'barrio' => 'Barrio Principal',
            'referencia' => 'Junto al supermercado Principal',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Luis Martinez',
            'cargo' => 'Estudiante',
            'denuncia_id' => $denuncia10->id,
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Sandra Ruiz',
            'cargo' => 'Directora',
            'denuncia_id' => $denuncia10->id,
        ]);

        $relacionHechoDenuncia10 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 20),
            'hora_hecho' => '09:00:00',
            'lugar_hecho' => 'Pasillo principal',
            'descripcion_hecho' => 'Un estudiante fue sorprendido robando pertenencias de otros estudiantes en el pasillo principal.',
            'fecha_denuncia' => Carbon::create(2024, 7, 21),
            'hora_denuncia' => '10:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia10->id,
            'denunciante_id' => $denunciante10->id,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia10->id,
        ]);


        // DENUNCIA #11
        // $denunciante11 = Denunciante::create([
        //     'nombre' => 'CARLOS SANCHEZ TORRES',
        //     'carnet' => '4567890',
        //     'direccion' => 'Calle Bolívar #123 Zona Oeste',
        //     'mantener_identidad_reserva' => 1,
        //     'correo_electronico' => 'carlos.sanchez@gmail.com',
        //     'telefono' => '71123456',
        //     'seguimiento' => 1,
        // ]);

        $denuncia11 = Denuncia::create([
            'direccion_general' => 'Avenida Libertad',
            'unidad_educativa' => 'Instituto Libertad',
            'distrito' => 'Distrito 3',
            'zona' => 'Zona Oeste',
            'barrio' => 'Barrio Libertad',
            'referencia' => 'Frente al parque Libertad',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Lucía Fernández',
            'cargo' => 'Profesora de Historia',
            'denuncia_id' => $denuncia11->id,
        ]);

        PersonaDenunciada::create([
            'nombre' => 'José Valdivia',
            'cargo' => 'Estudiante',
            'denuncia_id' => $denuncia11->id,
        ]);

        $relacionHechoDenuncia11 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 25),
            'hora_hecho' => '14:00:00',
            'lugar_hecho' => 'Biblioteca',
            'descripcion_hecho' => 'La profesora fue sorprendida plagiando trabajos de estudiantes y presentándolos como propios.',
            'fecha_denuncia' => Carbon::create(2024, 7, 26),
            'hora_denuncia' => '15:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia11->id,
            'denunciante_id' => $denunciante11?->id ?? null,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia11->id,
        ]);

        // DENUNCIA #12
        $denunciante12 = Denunciante::create([
            'nombre' => 'GLORIA ALVAREZ PEREZ',
            'carnet' => '5678901',
            'direccion' => 'Avenida América #456 Zona Norte',
            'mantener_identidad_reserva' => 0,
            'correo_electronico' => 'gloria.alvarez@gmail.com',
            'telefono' => '72234567',
            'seguimiento' => 0,
        ]);

        $denuncia12 = Denuncia::create([
            'direccion_general' => 'Calle La Paz',
            'unidad_educativa' => 'Colegio América',
            'distrito' => 'Distrito 4',
            'zona' => 'Zona Norte',
            'barrio' => 'Barrio América',
            'referencia' => 'Cerca del estadio América',
        ]);

        PersonaDenunciada::create([
            'nombre' => 'Fernando García',
            'cargo' => 'Estudiante',
            'denuncia_id' => $denuncia12->id,
        ]);

        PersonaDenunciada::create([
            'nombre' => 'María Ortega',
            'cargo' => 'Profesora de Matemáticas',
            'denuncia_id' => $denuncia12->id,
        ]); 

        $relacionHechoDenuncia12 = RelacionHechoDenuncia::create([
            'fecha_hecho' => Carbon::create(2024, 7, 27),
            'hora_hecho' => '11:00:00',
            'lugar_hecho' => 'Patio de recreo',
            'descripcion_hecho' => 'Un estudiante fue acosado por otros estudiantes debido a sus calificaciones bajas.',
            'fecha_denuncia' => Carbon::create(2024, 7, 28),
            'hora_denuncia' => '12:00:00',
        ]);

        FormularioDenuncia::create([
            'unidad_id' => 1,
            'denuncia_id' => $denuncia12->id,
            'denunciante_id' => $denunciante12->id,
            'relacion_hecho_denuncia_id' => $relacionHechoDenuncia12->id,
        ]);
    }
}
