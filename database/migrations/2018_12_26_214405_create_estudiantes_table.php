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
            $table->increments('id')->unique();
            $table->integer('actividadTitulacion_id')->unsigned();
            $table->timestamps();
            $table->string('rut',255)->unique();
            $table->string('nombre',255);
            $table->string('carrera',255);

            $table->foreign('actividadTitulacion_id')->references('id')->on('actividad_titulacions');
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
