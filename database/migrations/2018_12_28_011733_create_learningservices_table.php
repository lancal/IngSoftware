<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learningservices', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('semestre',['1','2']);
            $table->integer('cantidadEstudiantes')->unsigned();
            $table->integer('anio')->unsigned();
            $table->string('asignatura',50);
            $table->integer('activity_id')->unsigned();
            $table->timestamps();

            $table->foreign('activity_id')
                ->references('id')->on('activities')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learningservices');
    }
}
