<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materia;
use Faker\Generator as Faker;

$factory->define(Materia::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->word(),
        'descripcion' => $faker->sentence(15),
        'temario' => $faker->word().'_temario.pdf',
        'creditos' => random_int(5,7),
    ];
});
