<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModelDbAdjusts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_actividades',function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre',255)->unique();
        });


        Schema::table('actividad_extensiones', function (Blueprint $table){
            //$table->unsignedInteger('tipo_actividades_id');
            $table->foreign('tipo_actividades_id')
                ->references('id')
                ->on('tipo_actividades');

        });


        Schema::table('actividades',function (Blueprint $table){
           $table->boolean('borrado')->nullable();
        });

        Schema::table('convenios',function (Blueprint $table){
            $table->boolean('borrado')->nullable();
        });

        Schema::table('titulados',function (Blueprint $table){
            $table->boolean('borrado')->nullable();

        });

        Schema::table('indicadores',function (Blueprint $table){
            $table->boolean('borrado')->nullable();
        });

        //TODO upload migration and execute it on server and commit and push this changes


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
