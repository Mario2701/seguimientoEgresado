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
            $table->id();
            $table->string('nivelSatisfaccion',15);
            $table->string('comentarioResultado', 200);

            $table->integer('ResultEntrevistaEvaluavion_idResultEntrevistaEvaluavion');
            $table->integer('ResultadoSatisfaccion_idResultadoSatisfaccion');

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
        Schema::dropIfExists('infencuestasatisfaccion');
    }
}
