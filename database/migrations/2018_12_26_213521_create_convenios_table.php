<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('tipoConvenio_id')->unsigned();
            $table->integer('organizacion_id')->unsigned();
            $table->string('nombre',255)->unique();
            $table->date('fecha_inicio');
            $table->integer('duracion')->unsigned();
            $table->timestamps();

            $table->foreign('organizacion_id')->references('id')->on('organizacions');
            $table->foreign('tipoConvenio_id')->references('id')->on('tipo_convenios');
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
