<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DirectorioContactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('directorio_contactos', function (Blueprint $table){
        
        $table->bigIncrements('id');

        $table->string('Plaza');
        $table->string('Jefe_operativo');
        $table->string('Email_jefe');
        $table->string('Tel_jefe');
        $table->string('Estacion_directorio');
        $table->string('Supervisor');
        $table->string('Email_supervisor');
        $table->string('Tel_supervisor');
            
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
        //
    }
}
