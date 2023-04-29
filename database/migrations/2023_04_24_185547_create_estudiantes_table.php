<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->integer('idEstudiantes')->primary();
            $table->string('codigoEstudiante', 15);
            $table->string('nombreEstudiante', 25);
            $table->string('apellidopEstudiante', 20);
            $table->string('apellidomEstudiante', 20);
            $table->string('telefonoEstudiante', 15);
            $table->string('correoEstudiante', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
