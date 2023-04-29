<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaregistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listaregistros', function (Blueprint $table) {
            $table->integer('idListaRegistros')->primary();
            $table->dateTime('fechaRegistro');
            $table->integer('Formulario_idFormulario');
            
            $table->foreign('Formulario_idFormulario', 'fk_ListaRegistros_Formulario1')->references('idFormulario')->on('formularios')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listaregistros');
    }
}
