<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CreateUserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'nombre' => 'Pablo Jesús',
            'apellidos' => 'Rosales Juárez',
            'curp' => Str::random(18),
            'email' => 'pablo@pablo.com',
            'email_verified_at' => now(),
            'domicilio' => 'El Oro',
            'telefono' => '00000',
            'foto' => 'pablo.png',
            'social' => 'myrurl.com',

            'password' => bcrypt(12312300),
            'remember_token' => Str::random(10),

            //'id_rol' => 1,
            'status' => true
        ]);

        factory(App\User::class, 250)->create();
    }
}
