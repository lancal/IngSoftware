<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpositorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expositors', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('actividadExtension_id')->unsigned();
            $table->string('nombre',255);
            $table->timestamps();

            $table->foreign('actividadExtension_id')->references('id')->on('actividad_extensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expositors');
    }
}
