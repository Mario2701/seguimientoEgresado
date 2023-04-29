<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->integer('idFormulario')->primary();
            $table->string('tipoFormulario', 100);
            $table->dateTime('fechaCreacion');
            $table->tinyInteger('estado');
            $table->string('enlace', 250);
            $table->string('preguntas', 150);
            $table->integer('respuestas');
            $table->string('comentarios', 150);
            $table->integer('cantidadRespuestas');
            $table->integer('Egresado_idEgresado');
            
            $table->foreign('Egresado_idEgresado', 'fk_Formularios_Egresado1')->references('idEgresado')->on('egresado')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
