<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grupo;
use Faker\Generator as Faker;

$factory->define(Grupo::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word(),
        'detalle' => $faker->sentence(15),
        'id_carrera' => random_int(1,30),
        'id_generacion' => random_int(1,10),
    ];
});
