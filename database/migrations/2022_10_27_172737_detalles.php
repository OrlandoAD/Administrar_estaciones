<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detalles', function (Blueprint $table){

        $table->engine="InnoDB";
        $table->bigIncrements('id');


        $table->bigInteger('detalles_id')->unsigned();
        //Campos de la tabla estaciones
        $table->string('Objeto');
        $table->string('Detalle');
            
        $table->timestamps();

        $table->foreign('detalles_id')->references('id')->on('estaciones')->onDelete("cascade");

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
