<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistroHistorico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('registro_historico', function (Blueprint $table){

        $table->bigIncrements('id');

        $table->string('Estado_rep');
        $table->string('Estacion_registro');
        $table->string('Registro_reemplazo');
        $table->string('Observaciones');
        $table->string('Ultimo_chequeo_obs');
        $table->string('Nobreaks_reemplazados');
        $table->string('Ultimo_chequeo_nobreaks');
        $table->string('Numero_Serie');
            
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
