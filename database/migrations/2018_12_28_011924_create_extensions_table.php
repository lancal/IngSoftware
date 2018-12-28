<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extensions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->date('fechaRealizacion')->nullable();
            $table->string('lugar');
            $table->enum('tipoActividadExtension',['Charla','Curso','Taller','Seminario']);
            $table->integer('cantidadAsistentes')->unsigned();
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
        Schema::dropIfExists('extensions');
    }
}
