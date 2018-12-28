<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('carrera');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('certification_id')->unsigned();
            $table->timestamps();

            $table->foreign('certification_id')
                ->references('id')->on('certifications')
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
        Schema::dropIfExists('estudents');
    }
}
