<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadExtensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_extensions', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('actividad_id')->unsigned();
            $table->string('lugar',255);
            $table->date('fecha_realizacion');
            $table->timestamps();

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
        Schema::dropIfExists('actividad_extensions');
    }
}
