<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_persona'=>rand(1,10),
            'usuario'=>fake()->email(),
            'clave'=>fake()->password(),
            'fecha'=>fake()->date(),
            'habilitado'=>true,
            'id_rol'=>rand(1,3),
            'fecha_creacion'=>fake()->date(),
            'fecha_modificacion'=>fake()->date(),
        ];
    }
}
