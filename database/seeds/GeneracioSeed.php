<?php

use Illuminate\Database\Seeder;

class GeneracioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Generacion::class, 10)->create();
    }
}
