<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoConvenios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tipo_convenios', function (Blueprint $table) {

                $table->increments('id');
                $table->unsignedInteger('tipo_convenios_id')->unique();
                $table->string('nombre', 255);
                //$table->foreign('tipo_convenios_id')->references('tipo_convenio_id')->on('convenios');
                $table->timestamps();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_convenios');
    }
}
