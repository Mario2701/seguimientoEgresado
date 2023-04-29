<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultadosatisfaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultadosatisfaccion', function (Blueprint $table) {
            $table->integer('idResultadoSatisfaccion')->primary();
            $table->dateTime('fechaEncuesta');
            $table->integer('resultado');
            $table->string('comentariosAdicionales', 200);
            $table->integer('Formularios_idFormulario');
            
            $table->foreign('Formularios_idFormulario', 'fk_ResultadoSatisfaccion_Formularios1')->references('idFormulario')->on('formularios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultadosatisfaccion');
    }
}
