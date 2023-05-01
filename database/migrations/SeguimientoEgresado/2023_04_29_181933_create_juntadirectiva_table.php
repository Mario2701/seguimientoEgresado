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
            $table->id();

            $table->string('nombreJunta', 200);
            $table->dateTime('fechaConfirmacion');
            $table->string('enlaceReunion', 250);

            $table->integer('Coordinador_idCoordinador');
            $table->integer('ListaRegistros_idListaRegistros');

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
        Schema::dropIfExists('juntadirectiva');
    }
}
