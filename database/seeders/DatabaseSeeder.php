<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Canton;
use App\Models\Country_live;
use App\Models\Country_origin;
use App\Models\Document;
use App\Models\Ethnicity;
use App\Models\Institution;
use App\Models\Mechanism_title;
use App\Models\Province;
use App\Models\School;
use App\Models\Sex;
use App\Models\Student;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'user1@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);

        User::create([
            'email' => 'user2@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);

        Document::create([
            'documentName' => 'cedula'
        ]);

        Document::create([
            'documentName' => 'pasaporte'
        ]);
        
        Sex::create([
            'sexo' => 'Masculino'
        ]);

        Sex::create([
            'sexo' => 'Femenino'
        ]);

        Country_origin::create([
            'country_name' => 'España'
        ]);

        Country_origin::create([
            'country_name' => 'Ecuador'
        ]);

        Ethnicity::create([
            'name' => 'Mestizo'
        ]);

        Ethnicity::create([
            'name' => 'Mestizo'
        ]);

        Country_live::create([
            'country_name' => 'Ecuador'
        ]);

        Country_live::create([
            'country_name' => 'Ecuador'
        ]);

        Province::create([
            'province_name' => 'Quito'
        ]);

        Province::create([
            'province_name' => 'Quito'
        ]);

        Canton::create([
            'canton_name' => 'Mejia'
        ]);

        Canton::create([
            'canton_name' => 'Rumiñahui'
        ]);

        Mechanism_title::create([
            'description' => 'Tesis'
        ]);

        Mechanism_title::create([
            'description' => 'Complexivo'
        ]);

        Institution::create([
            'name' => 'Madre María Berenice'
        ]);

        Institution::create([
            'name' => 'Madre María Berenice'
        ]);

        School::create([
            'name' => 'publica'
        ]);

        School::create([
            'name' => 'privada'
        ]);

        Student::create([
            'numero_identificacion' => '1751519198',
            'document_id' => 1,
            'primerApellido' => 'Sánchez',
            'segundoApellido' => 'Vaca',
            'primerNombre' => 'Jorge',
            'segundoNombre' => 'Andres',
            'sex_id' => 1,
            'ethnicity_id' => 1,
            'fechaNacimiento' => now(),
            'country_origin_id' => 1,
            'country_live_id' => 1,
            'province_id' => 1,
            'canton_id' => 1,
            'fechaInicioEstudios' => now(),
            'fechaEgresamiento' => now(),
            'fechaActaGrado' => now(),
            'numeroActaGrado' => 5,
            'fechaRefrendacion' => now(),
            'numeroRefrendacion' => 5,
            'mechanism_title_id' => 1,
            'linkTesis' => 'linkTesis',
            'carrera' => 'Ingenieria en Sistemas',
            'notaPromedioAcumulado' => 19,
            'notaTrabajoTitulacion' => 19.5,
            'reconocimientoEstudiosPrevios' => 'reconocimientoEstudiosPrevios',
            'institution_id' => 1,
            'carreraEstudiosPrevios' => 'Mecanica',
            'tiempoEstudiosReconocimiento' => 10,
            'tiempoDuracionReconocimiento' => 10,
            'tituloBachiller' => 'tituloBachiller',
            'school_id' => 1,
            'observaciones' => 'Primer registro',
            'user_id' => 1,
            'code' => 'hola',
            'nota_ingles' => 18.2,
            'vinculacion' => 200,
            'pasantias' => 80,
            'is_aprobado' => true
        ]);

        Student::create([
            'numero_identificacion' => '0601519198',
            'document_id' => 2,
            'primerApellido' => 'Sánchez',
            'segundoApellido' => 'Vaca',
            'primerNombre' => 'Jorge',
            'segundoNombre' => 'Andrés',
            'sex_id' => 2,
            'ethnicity_id' => 2,
            'fechaNacimiento' => now(),
            'country_origin_id' => 2,
            'country_live_id' => 2,
            'province_id' => 2,
            'canton_id' => 2,
            'fechaInicioEstudios' => now(),
            'fechaEgresamiento' => now(),
            'fechaActaGrado' => now(),
            'numeroActaGrado' => 5,
            'fechaRefrendacion' => now(),
            'numeroRefrendacion' => 5,
            'mechanism_title_id' => 2,
            'linkTesis' => 'linkTesis',
            'carrera' => 'Contabilidad',
            'notaPromedioAcumulado' => 18,
            'notaTrabajoTitulacion' => 18.5,
            'reconocimientoEstudiosPrevios' => 'reconocimientoEstudiosPrevios',
            'institution_id' => 2,
            'carreraEstudiosPrevios' => 'Mecanica',
            'tiempoEstudiosReconocimiento' => 20,
            'tiempoDuracionReconocimiento' => 20,
            'tituloBachiller' => 'tituloBachiller',
            'school_id' => 2,
            'observaciones' => 'Primer registro',
            'user_id' => 2,
            'code' => 'hola1',
            'nota_ingles' => 12.2,
            'vinculacion' => 200,
            'pasantias' => 80,
            'is_aprobado' => false
        ]);

        $this->call([
            CarrerSeeder::class
        ]);
    }
}
