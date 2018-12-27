<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadAprendizajeServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_aprendizaje_servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('semestre')->unsigned();
            $table->integer('cantidad_estudiantes')->unsigned();
            $table->integer('anio')->unsigned();
            $table->string('asignatura',255);
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
        Schema::dropIfExists('actividad_aprendizaje_servicios');
    }
}
