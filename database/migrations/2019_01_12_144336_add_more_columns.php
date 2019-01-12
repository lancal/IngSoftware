<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('academicos',function (Blueprint $table){
          $table->boolean('borrado')->nullable();
        });


        Schema::table('organizaciones',function (Blueprint $table){
            $table->boolean('borrado')->nullable();
        });


        Schema::table('expositores',function (Blueprint $table){
            $table->boolean('borrado')->nullable();
        });

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
