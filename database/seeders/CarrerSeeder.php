<?php

namespace Database\Seeders;

use App\Models\Carrer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrer::create([
            'name' => 'ELECTRONICA',
            'codigo' => 'ISUS-CET-2023'
        ]);
        Carrer::create([
            'name' => 'ELECTROMECANICA',
            'codigo' => 'ISUS-CEM-2023'
        ]);
        Carrer::create([
            'name' => 'ELECTRICIDAD',
            'codigo' => 'ISUS-CEL-2023'
        ]);
        Carrer::create([
            'name' => 'CONTABILIDAD',
            'codigo' => 'ISUS-CCT-2023'
        ]);
        Carrer::create([
            'name' => 'TDII',
            'codigo' => 'ISUS-CDII-2023'
        ]);
        Carrer::create([
            'name' => 'MARKETING',
            'codigo' => 'ISUS-CMK-2023'
        ]);
        Carrer::create([
            'name' => 'TEXTIL',
            'codigo' => 'ISUS-CPT-2023'
        ]);
        Carrer::create([
            'name' => 'GESTION AMBIENTAL',
            'codigo' => 'ISUS-GAD-2023'
        ]);
        Carrer::create([
            'name' => 'PRODUCTTION AUDIOVISUAL',
            'codigo' => 'ISUS-CPRA-2023'
        ]);
        Carrer::create([
            'name' => 'DESARROLLO SOFTWARE',
            'codigo' => 'ISUS-CDLS-2023'
        ]);
    }
}
