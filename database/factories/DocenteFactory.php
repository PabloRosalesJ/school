<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Docente;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Docente::class, function (Faker $faker) {
    return [
        'id_user' => $faker->numberBetween($min = 181, $max = 251),
        'especialidad' => $faker->word(),
        'universidad' => $faker->word(),
        'cedula_profesional' => Str::random(10),
    ];
});
