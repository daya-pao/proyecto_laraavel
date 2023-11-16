<?php

namespace Database\Seeders;

use App\Models\ControlVacuna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ControlVacunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $controlVacuna = new ControlVacuna();
        $controlVacuna->mascota_id = 1;
        $controlVacuna->vacuna_id= "1";
        $controlVacuna->fecha="2013-02-12";
        $controlVacuna->save();
    }
}
