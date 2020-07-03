<?php

use Illuminate\Database\Seeder;

class GrupoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Grupo::class, 20)->create();
    }
}
