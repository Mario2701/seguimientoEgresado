<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsable', function (Blueprint $table) {
            $table->id();
            
            $table->string('dni', 8);
            $table->string('nombres', 200);
            $table->string('apellidos', 200);
            $table->string('telefono', 9);
            $table->string('correo', 300);
            $table->integer('JuntaDirectiva_idJuntaDirectiva');

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
        Schema::dropIfExists('responsable');
    }
}
