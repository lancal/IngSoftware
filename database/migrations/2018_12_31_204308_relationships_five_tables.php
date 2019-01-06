<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipsFiveTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('convenios',function (Blueprint $table){
            $table->foreign('tipo_convenio_id')
                ->references('id')->
                on('tipo_convenios');

            $table->foreign('organizacion_rut')
                ->references('rut')
                ->on('organizaciones');


        });

        Schema::table('evidencias',function (Blueprint $table){
           $table->foreign('convenio_id')
               ->references('id')
               ->on('convenios');

           $table->foreign('actividad_id')
               ->references('id')
               ->on('actividades');

        });

        Schema::table('actividades',function (Blueprint $table){
            $table->foreign('convenio_id')
            ->references('id')
                ->on('convenios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
