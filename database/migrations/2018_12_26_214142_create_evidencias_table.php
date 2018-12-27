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
            $table->increments('id')->unique();
            $table->integer('convenio_id')->unsigned();
            $table->integer('actividad_id')->unsigned();
            $table->timestamps();
            $table->string('ruta',255);
            $table->string('tipo',255)->nullable();

            $table->foreign('convenio_id')->references('id')->on('convenios');
            $table->foreign('actividad_id')->references('id')->on('actividads');
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
