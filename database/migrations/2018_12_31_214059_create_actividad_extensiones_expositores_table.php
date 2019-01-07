<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadExtensionesExpositoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_extensiones_expositores', function (Blueprint $table) {

            $table->unsignedInteger('act_ext_actividad_id');
            $table->unsignedInteger('expositor_id');
            $table->foreign('expositor_id')->references('id')->on('expositores');
            $table->foreign('act_ext_actividad_id')->references('id')->on('actividad_extensiones');
            $table->timestamps();

        });

        Schema::table('actividad_extensiones_expositores',function (Blueprint $table){

            $table->dropForeign(['expositor_id']);
            $table->dropForeign(['act_ext_actividad_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_extensiones_expositores');
    }
}
