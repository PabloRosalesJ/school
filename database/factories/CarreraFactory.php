<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Carrera;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

$factory->define(Carrera::class, function (Faker $faker) {
    return [
        'id_departamento' => random_int(1,5),
        'rep' => random_int(181,251),
        'nombre' => $faker->unique()->word(),
        'descripcion' => $faker->sentence(30),
        'plan_educativo' => $faker->word().'_plan.pdf',
        'duracion' => random_int(4,8),
        'creditos' => random_int(420, 480),
    ];
});
