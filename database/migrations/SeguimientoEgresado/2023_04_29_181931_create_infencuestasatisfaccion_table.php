<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfencuestasatisfaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infencuestasatisfaccion', function (Blueprint $table) {
            $table->integer('idInfEncuestaSatisfaccion')->primary();
            $table->integer('nivelSatisfaccion');
            $table->string('comentarios', 120);
            $table->integer('ResultEntrevistaEvaluavion_idResultEntrevistaEvaluavion');
            $table->integer('ResultadoSatisfaccion_idResultadoSatisfaccion');
            
            $table->foreign('ResultEntrevistaEvaluavion_idResultEntrevistaEvaluavion', 'fk_InfEncuestaSatisfaccion_ResultEntrevistaEvaluavion1')->references('idResultEntrevistaEvaluavion')->on('resultentrevistaevaluavion')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('ResultadoSatisfaccion_idResultadoSatisfaccion', 'fk_InfEncuestaSatisfaccion_ResultadoSatisfaccion1')->references('idResultadoSatisfaccion')->on('resultadosatisfaccion')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infencuestasatisfaccion');
    }
}
