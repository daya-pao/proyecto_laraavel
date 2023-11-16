<?php

namespace Database\Seeders;

use App\Models\Mascota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mascota = new Mascota();
        $mascota->nombre = "firulais";
        $mascota->fechaNacimiento="2023-04-23";
        $mascota->user_id = 1;
        $mascota->tipo_mascota_id=1;
        $mascota->raza_id= 1;
        $mascota->save();
    }
}
