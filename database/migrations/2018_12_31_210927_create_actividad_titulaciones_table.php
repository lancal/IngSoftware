<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTitulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_titulaciones', function (Blueprint $table) {

            $table->date('fecha_inicio');
            $table->date('fecha_termino')->nullable();
            $table->string('lugar',255);
            $table->unsignedInteger('actividad_id')->primary();
            $table->foreign('actividad_id')->references('id')->on('actividades');
            //$table->foreign('act_titul_actividad_id')->references('id')->on('actividad_titulacion_academicos');
            //$table->foreign('actividad_titulaciones_actividad_id')->references('id')->on('estudiantes');



            $table->timestamps();

        });

        Schema::table('actividad_titulaciones',function (Blueprint $table){

            $table->dropForeign(['actividad_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_titulaciones');
    }
}
