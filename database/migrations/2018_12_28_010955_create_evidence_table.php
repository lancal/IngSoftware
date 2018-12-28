<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rutaArchivo');
            $table->enum('tipoEvidencia',['listaAsistencia','imagen','audioVisual','formularioInscripcion','acuerdo']);
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
        Schema::dropIfExists('evidence');
    }
}
