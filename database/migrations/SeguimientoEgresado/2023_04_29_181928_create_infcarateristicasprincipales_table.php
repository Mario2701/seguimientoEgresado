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
            $table->id();

            $table->string('preguntas', 250);
            $table->string('respuestas',250);
            $table->integer('Formularios_idFormulario');

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
        Schema::dropIfExists('infcarateristicasprincipales');
    }
}
