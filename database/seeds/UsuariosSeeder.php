<?php

use Illuminate\Database\Seeder;
use App\Persona;
use App\User;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Usuario');
        for ($i=0; $i < 100; $i++)
        { 
            $person = new Persona;
            $person->crearPersona();
            DB::table('usuarios')->insert([
                
            ]);
        }
    }
}
