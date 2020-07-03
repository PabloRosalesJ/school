<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Generacion;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Generacion::class, function (Faker $faker) {
    return [
        'anio' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'detalle' => $faker->sentence(10),
        'ciclo_escolar' => Carbon::create($year = random_int(2015,2017)).' - '.Carbon::create($year = random_int(2020,2025)),
    ];
});
