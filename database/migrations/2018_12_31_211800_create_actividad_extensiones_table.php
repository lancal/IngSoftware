<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadExtensionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_extensiones', function (Blueprint $table) {
            $table->timestamps();
            $table->string('lugar',255);
            $table->date('fecha_realizacion');
            $table->unsignedInteger('actividad_id')->primary();
        });

        Schema::table('actividad_extensiones',function (Blueprint $table){
            $table->foreign('actividad_id')
                ->references('id')
                ->on('actividades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_extensiones');
    }
}
