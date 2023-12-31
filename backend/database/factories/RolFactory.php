<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rol>
 */
class RolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $rol = ['admin', 'user', 'cliente'];

        return [
            'rol' => fake()->randomElement($rol),
            'fecha_creacion' => fake()->date(),
            'fecha_modificacion' => fake()->date()
        ];
    }
}
