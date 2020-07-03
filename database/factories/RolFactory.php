<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rol;
use App\User;
use Faker\Generator as Faker;

$factory->define(Rol::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word(),
        'descripcion' => $faker->randomElement([User::$ADMIN_USER]),
    ];
});
