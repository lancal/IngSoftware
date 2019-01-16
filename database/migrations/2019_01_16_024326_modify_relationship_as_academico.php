<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyRelationshipAsAcademico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actividad_aprendizaje_servicios',function (Blueprint $table){
            $table->dropColumn(['academico_rut']);
        });


        Schema::create('act_apren_serv_academicos',function (Blueprint $table){
            $table->timestamps();
           $table->unsignedInteger('act_apren_serv_aca_id');
           $table->foreign('act_apren_serv_aca_id')
               ->references('actividad_id')
               ->on('actividad_aprendizaje_servicios');

           $table->string('academico_rut',255);
           $table->foreign('academico_rut')
               ->references('rut')
               ->on('academicos');


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
