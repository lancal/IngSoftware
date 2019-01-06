<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoActividadExtensionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_actividad_extensiones', function (Blueprint $table) {
            $table->string('academico_rut',255)->unique();
            $table->unsignedInteger('act_ext_actividad_id');
            $table->timestamps();
        });

        Schema::table('academico_actividad_extensiones',function (Blueprint $table){
           $table->foreign('academico_rut')
               ->references('rut')
               ->on('academicos');

           $table->foreign('act_ext_actividad_id')
               ->references('actividad_id')
               ->on('actividad_extensiones');


        });

        Schema::table('actividad_aprendizaje_servicios',function (Blueprint $table){
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
        Schema::dropIfExists('academico_actividad_extensiones');
    }
}