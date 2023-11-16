<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'fechaNacimiento'=>fake()->date(),
            'user_id'=>fake()->user()->id,
            'tipo_mascota_id'=>(string) rand(0,0),
            'role_id'=>(string) rand(0,0),
        ];
    }
}
