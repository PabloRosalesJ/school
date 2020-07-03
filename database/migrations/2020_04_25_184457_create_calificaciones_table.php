<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBiginteger('id_estudiante');
            
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
            $table->unsignedBiginteger('id_materia');
            
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->unsignedBiginteger('id_grupo');
            
            $table->foreign('id_grupo')->references('id')->on('grupos');
            
            $table->double('calificacion');
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
        Schema::dropIfExists('calificaciones');
    }
}
