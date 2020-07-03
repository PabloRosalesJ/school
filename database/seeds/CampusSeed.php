<?php

use Illuminate\Database\Seeder;

class CampusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Capmus::create([
            'nombre' => 'Nicolas Bravo',
            'direccion' => 'Atlacomulco',
            'telefono' => '0000000000',
            'director' => random_int(1,50),
        ]);
    }
}
