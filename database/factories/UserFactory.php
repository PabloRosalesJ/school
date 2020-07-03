<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellidos' => $faker->word(),
        'curp' => Str::random(18),
        'email' => $faker->email,
        'email_verified_at' => now(),
        'domicilio' => $faker->address,
        'telefono' => $faker->phoneNumber,
        'foto' => $faker->imageUrl(),
        'social' => $faker->url,

        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),

        // 'id_rol' => random_int(1,3),
        'status' => true
    ];
});
