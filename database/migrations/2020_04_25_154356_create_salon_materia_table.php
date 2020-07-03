<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalonMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salon_materia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('id_salon');
            $table->foreign('id_salon')->references('id')->on('salones');
            $table->unsignedBiginteger('id_materia');
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
        Schema::dropIfExists('salon_materia');
    }
}
