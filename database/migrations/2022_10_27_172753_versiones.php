<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Versiones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('versiones', function (Blueprint $table){


        $table->engine="InnoDB";
        $table->bigIncrements('id');


        $table->bigInteger('versiones_id')->unsigned();
        //Campos de la tabla estaciones
        $table->string('Herramienta');
        $table->string('Version');
            
        $table->timestamps();

        $table->foreign('versiones_id')->references('id')->on('estaciones')->onDelete("cascade");
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
