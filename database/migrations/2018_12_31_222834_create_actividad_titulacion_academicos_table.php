<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTitulacionAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_titulacion_academicos', function (Blueprint $table) {
            $table->unsignedInteger('act_titul_actividad_id');
            $table->string('academico_rut',13);
            $table->timestamps();
        });

        Schema::table('actividad_titulacion_academicos',function (Blueprint $table){
           $table->foreign('act_titul_actividad_id')
               ->references('actividad_id')
               ->on('actividad_titulaciones');

           $table->foreign('academico_rut')
               ->references('rut')
               ->on('academicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_titulacion_academicos');
    }
}
