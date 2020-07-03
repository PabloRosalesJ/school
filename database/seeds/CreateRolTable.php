<?php

use Illuminate\Database\Seeder;

class CreateRolTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Rol::create([
            'nombre' => App\User::$ADMIN_USER,
            'descripcion' => 'una descripcion',
        ]);
        App\Rol::create([
            'nombre' => App\User::$SECRET_USER,
            'descripcion' => 'una descripcion',
        ]);
        App\Rol::create([
            'nombre' => App\User::$TEACHER_USER,
            'descripcion' => 'una descripcion',
        ]);
        App\Rol::create([
            'nombre' => App\User::$STUDENT_USER,
            'descripcion' => 'una descripcion',
        ]);
        //factory(App\Rol::class, 3)->create();
    }
}
