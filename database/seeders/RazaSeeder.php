<?php

namespace Database\Seeders;

use App\Models\Raza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $razas = new Raza();
        $razas->nombre="pincher";
        $razas->tipo_mascota_id= "1";
        $razas->save();

        $razas2 = new Raza();
        $razas2->nombre="asiatico";
        $razas2->tipo_mascota_id= "2";
        $razas2->save();
    }
}
