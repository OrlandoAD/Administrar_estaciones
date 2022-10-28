<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accesos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('accesos', function (Blueprint $table){

        $table->engine="InnoDB";
        $table->bigIncrements('id');


        $table->bigInteger('accesos_id')->unsigned();
        //Campos de la tabla estaciones
        $table->string('Programa');
        $table->string('Usuario');
        $table->string('Contrasena');
            
        $table->timestamps();

        $table->foreign('accesos_id')->references('id')->on('estaciones')->onDelete("cascade");
    
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
