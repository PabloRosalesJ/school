<?php

use Illuminate\Database\Seeder;

class MateriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Materia::class, 50)->create();
    }
}
