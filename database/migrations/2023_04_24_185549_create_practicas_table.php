<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicas', function (Blueprint $table) {
            $table->integer('idPracticas')->primary();
            $table->integer('Codigo');
            $table->integer('idEstudiante');
            $table->integer('idDocente');
            $table->integer('idEmpresa');
            $table->string('Titulo', 250);
            $table->integer('Estudiantes_idEstudiantes');
            $table->integer('Etapas_idEtapas');
            $table->integer('Docente_idDocente');
            $table->integer('Empresas_idEmpresas');
            
            $table->foreign('Docente_idDocente', 'fk_Practicas_Docentes1')->references('idDocente')->on('docente')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Empresas_idEmpresas', 'fk_Practicas_Empresas1')->references('idEmpresas')->on('empresas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Estudiantes_idEstudiantes', 'fk_Practicas_Estudiantes')->references('idEstudiantes')->on('estudiantes')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('Etapas_idEtapas', 'fk_Practicas_Etapas1')->references('idEtapas')->on('etapas')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicas');
    }
}
