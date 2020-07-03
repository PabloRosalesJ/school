<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class DocenteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Docente::class, 70)->create();
        
        // $faker = new Faker();
        // for ($i=181; $i <251 ; $i++) { 
        //     App\Docente::create(function(Faker $faker, $i){[
        //         'id_user' => $i,
        //         'especialidad' => $faker->word(),
        //         'universidad' => $faker->word(),
        //         'cedula_profesional' => Str::random(10),
        //     ];});
        // }
    }
}
