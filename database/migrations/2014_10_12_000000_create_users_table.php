<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('curp', 18)->unique();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();

            $table->string('domicilio');
            $table->string('telefono')->unique();
            $table->string('foto')->nullable();
            $table->string('social')->unique()->nullable();
            $table->string('password');

            // $table->unsignedBigInteger('id_rol')->nullable();
            // $table->foreign('id_rol')->references('id')->on('roles');

            $table->rememberToken();
            //$table->tinyInteger('status')->default(True);
            $table->boolean('status')->default(true);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
