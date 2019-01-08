<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicos', function (Blueprint $table) {

            $table->string('rut',255)->primary()->unique();
            $table->string('nombre',255);
            $table->unsignedInteger('tipo_academico_id');
            $table->foreign('tipo_academico_id')->references('id')->on('tipo_academicos');

            $table->timestamps();
        });


        Schema::table('academicos', function (Blueprint $table) {

            $table->dropForeign(['tipo_academico_id']);

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academicos');
    }
}
