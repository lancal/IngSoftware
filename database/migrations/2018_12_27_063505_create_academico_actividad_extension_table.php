<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoActividadExtensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_actividad_extension', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('actividadExtension_id')->unsigned();
            $table->integer('academico_id')->unsigned();
            $table->timestamps();

            $table->foreign('actividadExtension_id')->references('id')->on('actividad_extensions');
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
        Schema::dropIfExists('academico_actividad_extension');
    }
}
