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

            $table->string('asignatura');
            $table->unsignedInteger('cantidad_estudiantes');
            $table->unsignedInteger('anio');
            $table->unsignedInteger('semestre');
            $table->unsignedInteger('actividad_id');
            $table->string('academico_rut',255);
            $table->foreign('actividad_id')->references('id')->on('actividades');
            $table->foreign('academico_rut')->references('rut')->on('academicos');
            $table->timestamps();
        });

        Schema::table('actividad_aprendizaje_servicios',function (Blueprint $table){

            $table->dropForeign(['actividad_id']);
            $table->dropForeign(['academico_rut']);

        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_aprendizaje_servicios');
    }
}
