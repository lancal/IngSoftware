<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('actividades', function (Blueprint $table) {

                $table->increments('id');
                $table->unsignedInteger('convenio_id');
                $table->text('descripcion');
                $table->string('titulo', 255);
                $table->unsignedInteger('cantidad_asistentes');

                $table->foreign('convenio_id')->references('id')->on('convenios');
                //$table->foreign('id')->references('id')->on('convenios');

                $table->timestamps();


            });



        Schema::table('actividades', function (Blueprint $table) {

            $table->dropForeign(['convenio_id']);
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}
