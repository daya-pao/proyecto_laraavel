<?php

namespace Database\Seeders;

use App\Models\TipoMascota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoMascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tipoMascota = new TipoMascota();
        $tipoMascota->nombre="perro";
        $tipoMascota->save();

        $tipoMascota2 = new TipoMascota();
        $tipoMascota2->nombre="gato";
        $tipoMascota2->save();
    }
}
