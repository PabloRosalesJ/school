<?php

use App\Estudiante;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EstudianteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 180; $i++) { 
            Estudiante::create([
                'matricula' => Str::random(12),
                'id_user' => $i,
                'id_carrera' => random_int(1,30),
                'id_generacion' => random_int(1,10),
            ]);
        }
        
        //factory(Estudiante::class, 180)->create();
    }
}
