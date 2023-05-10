<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuntaDirectivaEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junta_directiva_egresados', function (Blueprint $table) {
            $table->id('junta_directiva_egresado_id');
            $table->integer('egresado_id');
            $table->integer('tipo_cargo_id');
            $table->string('periodo_directiva', 15);
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
        Schema::dropIfExists('junta_directiva_egresados');
    }
}
