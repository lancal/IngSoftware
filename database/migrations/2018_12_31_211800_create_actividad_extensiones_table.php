<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadExtensionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_extensiones', function (Blueprint $table) {

            $table->string('lugar',255);
            $table->date('fecha_realizacion');
            $table->unsignedInteger('actividad_id');
            $table->foreign('actividad_id')->references('id')->on('actividades');
            $table->foreign('actividad_extensiones')->references('id')->on('actividad_extensiones_expositores');
            $table->foreign('academico_actividad_extensiones')->references('id')->on('actividad_extensiones_expositores');
            $table->timestamps();
        });

        Schema::table('actividad_extensiones', function (Blueprint $table) {

            $table->dropForeign(['actividad_id']);
            $table->dropForeign(['actividad_extensiones']);
            $table->dropForeign(['academico_actividad_extensiones']);

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_extensiones');
    }
}
