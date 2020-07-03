<?php

use Illuminate\Database\Seeder;

class UniversidadSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Universidad::create([
            'nombre' => 'CEMSP Isaac Newton',
            'datos' => 'algunos datos',
            'rector' => random_int(1,50),
        ]);
    }
}
