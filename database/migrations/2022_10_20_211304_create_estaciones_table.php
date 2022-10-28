<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estaciones', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            //Campos de la tabla estaciones
            $table->string('Estado');
            $table->string('Estacion');
            $table->string('Estado_Republica');
            $table->string('Dispensarios_Activos');
            $table->string('Dispensarios_Totales');

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
        Schema::dropIfExists('estaciones');
    }
}
