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
            $table->id();
            $table->string('numeroActa', 9);
            $table->string('acuerdos', 100);
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
        Schema::dropIfExists('libroactas');
    }
}
