<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresado', function (Blueprint $table) {
            $table->integer('idEgresado')->primary();
            $table->string('dni', 8);
            $table->string('nombres', 200);
            $table->string('apellidos', 200);
            $table->string('telefono', 9);
            $table->string('correo', 300);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('egresado');
    }
}
