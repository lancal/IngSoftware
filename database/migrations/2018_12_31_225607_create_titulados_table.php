<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTituladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulados', function (Blueprint $table) {
            $table->string('rut',13)->unique()->primary();
            $table->string('nombre',255);
            $table->string('telefono',12)->nullable();
            $table->string('correo',255)->nullable();
            $table->string('empresa',255)->nullable();
            $table->unsignedInteger('anio');
            $table->string('carrera',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titulados');
    }
}
