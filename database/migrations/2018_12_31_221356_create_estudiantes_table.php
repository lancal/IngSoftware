<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {

            $table->string('rut',13)->primary()->unique();
            $table->string('nombre',255);
            $table->string('carrera');
            $table->unsignedInteger('actividad_titulaciones_actividad_id');
            $table->foreign('actividad_titulaciones_actividad_id')->references('id')->on('actividad_titulaciones');

            $table->timestamps();


        });

        Schema::table('estudiantes',function (Blueprint $table){

            $table->dropForeign(['actividad_titulaciones_actividad_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
