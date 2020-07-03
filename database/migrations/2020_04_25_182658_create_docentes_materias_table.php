<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes_materias', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_docente');
            $table->foreign('id_docente')->references('id')->on('docentes');

            $table->unsignedBigInteger('id_materia');
            $table->foreign('id_materia')->references('id')->on('materias');
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
        Schema::dropIfExists('docentes_materias');
    }
}
