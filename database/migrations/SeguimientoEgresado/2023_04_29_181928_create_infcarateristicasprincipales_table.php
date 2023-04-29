<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfcarateristicasprincipalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infcarateristicasprincipales', function (Blueprint $table) {
            $table->integer('idInfCarateristicasPrincipales')->primary();
            $table->string('caracteristicas', 250);
            $table->dateTime('fechaCreacion');
            $table->integer('Formularios_idFormulario');
            
            $table->foreign('Formularios_idFormulario', 'fk_InfCarateristicasPrincipales_Formularios1')->references('idFormulario')->on('formularios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infcarateristicasprincipales');
    }
}
