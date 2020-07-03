<?php

use Illuminate\Database\Seeder;

class CarrerasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Carrera::create([
            'id_departamento' => random_int(1,5),
            'rep' => random_int(1,50),
            'nombre' => 'Ing Informatica',
            'descripcion' => 'alguna desc',
            'plan_educativo' => 'plan.pdf',
            'duracion' => random_int(4,8),
            'creditos' => random_int(420, 480),
        ]);

        App\Carrera::create([
            'id_departamento' => random_int(1,5),
            'rep' => random_int(1,50),
            'nombre' => 'Matematicas',
            'descripcion' => 'alguna desc',
            'plan_educativo' => 'plan.pdf',
            'duracion' => random_int(4,8),
            'creditos' => random_int(420, 480),
        ]);

        App\Carrera::create([
            'id_departamento' => random_int(1,5),
            'rep' => random_int(1,50),
            'nombre' => 'FisicoMatematicas',
            'descripcion' => 'alguna desc',
            'plan_educativo' => 'plan.pdf',
            'duracion' => random_int(4,8),
            'creditos' => random_int(420, 480),
        ]);
        
        factory(App\Carrera::class, 27)->create();
    }
}
