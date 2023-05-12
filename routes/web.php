<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\SeguimientoEgresadosController;
use App\Http\Controllers\ActaEgresadoController;
use App\Http\Controllers\CronogramaEgresadoController;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EvaluacionEgresadoController;
use App\Http\Controllers\EvaluacionTrabajoController;
use App\Http\Controllers\FormatoEvaluacionController;
use App\Http\Controllers\JuntaDirectivaController;
use App\Http\Controllers\PlanTrabajoController;
use App\Http\Controllers\RequisitoEgresadoController;
use App\Http\Controllers\ReunionController;

use App\Http\Controllers\TipoCargoController;


Route::get('/', HomeController::class);

Route::controller(PracticaController::class)->group(function(){
    Route::get('practicas','index')->name('practicas.index');
    Route::get('practicas/create','create')->name('practicas.create');
    //ruta para guardar lo escrito en el formulario
    Route::post('practicas','store')->name('practicas.store');
    Route::get('practicas/{id}','show')->name('practicas.show');
});

// --------------------- SEGUIMIENTO AL EGRESADO --------------------------- //

Route::controller(ActaEgresadoController::class)->group(function(){
    Route::get('actas','index')->name('actasEgresados.index');
    Route::get('actas/create','create')->name('actasEgresados.create');
    Route::post('actas','store')->name('actasEgresados.store');
    Route::get('actas/{id}','show')->name('actasEgresados.show');
});

Route::controller(CronogramaEgresadoController::class)->group(function(){
    Route::get('cronogramas/egresados','index')->name('cronogramasEgresados.index');
    Route::get('cronogramas/egresados/create','create')->name('cronogramasEgresados.create');
    Route::post('cronogramas/egresados','store')->name('cronogramasEgresados.store');
    Route::get('cronogramas/egresados/{id}','show')->name('cronogramasEgresados.show');
});

Route::controller(EgresadoController::class)->group(function(){
    Route::get('egresados','index')->name('egresados.index');
    Route::get('egresados/create','create')->name('egresados.create');
    Route::post('egresados','store')->name('egresados.store');
    Route::get('egresados/{id}','show')->name('egresados.show');
});

Route::controller(EmpresaController::class)->group(function(){
    Route::get('empresas','index')->name('empresas.index');
    Route::get('empresas/create','create')->name('empresas.create');
    Route::post('empresas','store')->name('empresas.store');
    Route::get('empresas/{id}','show')->name('empresas.show');
});

Route::controller(EvaluacionEgresadoController::class)->group(function(){
    Route::get('evaluaciones/egresados','index')->name('evaluacionEgresados.index');
    Route::get('evaluaciones/egresados/create','create')->name('evaluacionEgresados.create');
    Route::post('evaluaciones/egresados','store')->name('evaluacionEgresados.store');
    Route::get('evaluaciones/egresados/{id}','show')->name('evaluacionEgresados.show');
});

Route::controller(EvaluacionTrabajoController::class)->group(function(){
    Route::get('evaluaciones/trabajos','index')->name('evaluacionTrabajo.index');
    Route::get('evaluaciones/trabajos/create','create')->name('evaluacionTrabajo.create');
    Route::post('evaluaciones/trabajos','store')->name('evaluacionTrabajo.store');
    Route::get('evaluaciones/trabajos/{id}','show')->name('evaluacionTrabajo.show');
});

Route::controller(FormatoEvaluacionController::class)->group(function(){
    Route::get('formatos/evaluaciones','index')->name('formatoEvaluacion.index');
    Route::get('formatos/evaluaciones/create','create')->name('formatoEvaluacion.create');
    Route::post('formatos/evaluaciones','store')->name('formatoEvaluacion.store');
    Route::get('formatos/evaluaciones/{id}','show')->name('formatoEvaluacion.show');
});

Route::controller(JuntaDirectivaController::class)->group(function(){
    Route::get('juntas/directivas','index')->name('juntaDirectiva.index');
    Route::get('juntas/directivas/create','create')->name('juntaDirectiva.create');
    Route::post('juntas/directivas','store')->name('juntaDirectiva.store');
    Route::get('juntas/directivas/{id}','show')->name('juntaDirectiva.show');
});

Route::controller(PlanTrabajoController::class)->group(function(){
    Route::get('planes/trabajos','index')->name('planTrabajo.index');
    Route::get('planes/trabajos/create','create')->name('planTrabajo.create');
    Route::post('planes/trabajos','store')->name('planTrabajo.store');
    Route::get('planes/trabajos/{id}','show')->name('planTrabajo.show');
});

Route::controller(RequisitoEgresadoController::class)->group(function(){
    Route::get('requisitos/egresados','index')->name('requisitoEgresado.index');
    Route::get('requisitos/egresados/create','create')->name('requisitoEgresado.create');
    Route::post('requisitos/egresados','store')->name('requisitoEgresado.store');
    Route::get('requisitos/egresados/{id}','show')->name('requisitoEgresado.show');
});

Route::controller(ReunionController::class)->group(function(){
    Route::get('reuniones','index')->name('reuniones.index');
    Route::get('reuniones/create','create')->name('reuniones.create');
    Route::post('reuniones','store')->name('reuniones.store');
    Route::get('reuniones/{id}','show')->name('reuniones.show');
});

Route::controller(TipoCargoController::class)->group(function(){
    Route::get('tipos/cargos','index')->name('tipoCargos.index');
    Route::get('tipos/cargos/create','create')->name('tipoCargos.create');
    Route::post('tipos/cargos','store')->name('tipoCargos.store');
    Route::get('tipos/cargos/{id}','show')->name('tipoCargos.show');
});

