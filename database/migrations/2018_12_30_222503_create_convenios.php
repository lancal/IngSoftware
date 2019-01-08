<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvenios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()


    {



            Schema::create('convenios', function (Blueprint $table) {

                $table->increments('id');
                $table->string('nombre', 255);
                $table->date('fecha_inicio');
                $table->unsignedInteger('duracion');
                $table->string('organizacion_rut', 255);
                $table->unsignedInteger('tipo_convenio_id');
                $table->foreign('tipo_convenio_id')->references('id')->on('tipo_convenios');
                $table->foreign('organizacion_rut')->references('rut')->on('organizaciones');
                //$table->foreign('id')->references('convenio_id')->on('actividades');


                $table->timestamps();
            });

            Schema::table('convenios', function (Blueprint $table) {

                $table->dropForeign(['tipo_convenio_id']);
                $table->dropForeign(['organizacion_rut']);

            });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convenios');
    }
}
