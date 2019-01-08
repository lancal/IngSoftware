<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidencias', function (Blueprint $table) {

            $table->increments('id');
            $table->string('ruta',255);
            $table->string('tipo',255);
            $table->unsignedInteger('convenio_id')->nullable();
            $table->unsignedInteger('actividad_id')->nullable();
            $table->foreign('convenio_id')->references('id')->on('convenios');
            $table->foreign('actividad_id')->references('id')->on('actividades');

            $table->timestamps();
        });

        Schema::table('evidencias',function (Blueprint $table){

            $table->dropForeign(['convenio_id']);
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
        Schema::dropIfExists('evidencias');
    }
}
