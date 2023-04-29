<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticasrequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicasrequisitos', function (Blueprint $table) {
            $table->integer('idPracticasRequisitos')->primary();
            $table->integer('Practicas_idPracticas');
            $table->integer('Requisitos_idRequisitos');
            
            $table->foreign('Practicas_idPracticas', 'fk_Practicas_has_Requisitos_Practicas1')->references('idPracticas')->on('practicas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Requisitos_idRequisitos', 'fk_Practicas_has_Requisitos_Requisitos1')->references('idRequisitos')->on('requisitos')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicasrequisitos');
    }
}
