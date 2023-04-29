<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->integer('idEmpresas')->primary();
            $table->string('nombreEmpresa', 100);
            $table->string('encargadoEmpresa', 100);
            $table->string('rubroEmpresa', 100);
            $table->string('direccionEmpresa', 100);
            $table->string('telefonoEmpresa', 15);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
