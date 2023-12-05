<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           
            'primer_nombre'=>fake()->name(),
            'segundo_nombre'=>fake()->name(),
            'primer_apellido'=>fake()->lastName(),
            'segundo_apellido'=>fake()->lastName(),
            'fecha_creacion'=>fake()->date(),
            'fecha_modificacion'=>fake()->date(),
        ];
    }
}
