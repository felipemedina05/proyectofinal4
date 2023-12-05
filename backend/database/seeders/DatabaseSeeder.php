<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * 
     */
    public function run(): void
    {

        $persona = new PersonaSeeder();
        $persona->run();
        $rol = new RolSeeder();
        $rol->run();
        $usuario = new UsuarioSeeder();
        $usuario->run();

       
    }
}
