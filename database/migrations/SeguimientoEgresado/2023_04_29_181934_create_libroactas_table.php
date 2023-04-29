<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroactasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libroactas', function (Blueprint $table) {
            $table->integer('idlibroActas')->primary();
            $table->string('numeroActa', 9);
            $table->dateTime('fechaActa');
            $table->string('acuerdos', 100);
            $table->integer('JuntaDirectiva_idJuntaDirectiva');
            
            $table->foreign('JuntaDirectiva_idJuntaDirectiva', 'fk_libroActas_JuntaDirectiva1')->references('idJuntaDirectiva')->on('juntadirectiva')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libroactas');
    }
}
