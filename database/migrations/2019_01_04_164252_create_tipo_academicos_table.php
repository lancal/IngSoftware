<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->unique();

        });

        Schema::table('academicos',function (Blueprint $table){
            $table->dropColumn(['tipo_academico']);
            $table->unsignedInteger('tipo_academico_id');
            $table->foreign('tipo_academico_id')
                ->references('id')
                ->on('tipo_academicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_academicos');
    }
}
