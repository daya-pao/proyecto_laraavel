<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mascota;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RoleSeeder::class);

        $this->call(TipoMascotaSeeder::class);

        $this->call(RazaSeeder::class);

        $this->call(UserSedeer::class);
        
        $this->call(MascotaSeeder::class);

        $this->call(VacunaSeeder::class);

        $this->call(ControlVacunaSeeder::class);
    }
}
