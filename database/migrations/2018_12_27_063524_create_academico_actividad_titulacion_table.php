<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoActividadTitulacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_actividad_titulacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actividadTitulacion_id')->unsigned();
            $table->integer('academico_id')->unsigned();
            $table->timestamps();

            $table->foreign('actividadTitulacion_id')->references('id')->on('actividad_titulacions');
            $table->foreign('academico_id')->references('id')->on('academicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academico_actividad_titulacion');
    }
}
