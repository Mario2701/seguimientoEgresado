<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuntadirectivaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juntadirectiva', function (Blueprint $table) {
            $table->integer('idJuntaDirectiva')->primary();
            $table->string('nombreJunta', 200);
            $table->dateTime('fechaConfirmacion');
            $table->string('enlaceReunion', 250);
            $table->integer('Coordinador_idCoordinador');
            $table->integer('ListaRegistros_idListaRegistros');
            
            $table->foreign('Coordinador_idCoordinador', 'fk_JuntaDirectiva_Coordinador1')->references('idCoordinador')->on('coordinador')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('ListaRegistros_idListaRegistros', 'fk_JuntaDirectiva_ListaRegistros1')->references('idListaRegistros')->on('listaregistros')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juntadirectiva');
    }
}
