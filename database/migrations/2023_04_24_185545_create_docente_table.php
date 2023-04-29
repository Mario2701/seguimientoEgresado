<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente', function (Blueprint $table) {
            $table->integer('idDocente')->primary();
            $table->string('codigoDocente', 15);
            $table->string('nombresDocente', 25);
            $table->string('apellidopDocente', 20);
            $table->string('apellidomDocente', 20);
            $table->string('telefonoDocente', 20);
            $table->string('correoDocente', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente');
    }
}
