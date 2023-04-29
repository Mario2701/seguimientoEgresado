<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticaController;
use App\Http\Controllers\SeguimientoEgresadosController;


Route::get('/', HomeController::class);
//Agregando nuevas rutas para la gestion de practicas
Route::controller(PracticaController::class)->group(function(){
    Route::get('practicas','index');
    Route::get('practicas/create','create');
    Route::get('practicas/{procedimiento}','show');
});

Route::controller(SeguimientoEgresadosController::class)->group(function(){
    Route::get('SeguimientoEgresados/formularios','formulariosSeguimiento');
    Route::get('SeguimientoEgresados/listaseguimiento','listaRegistrosEgresados');
    Route::get('SeguimientoEgresados/convocatorias','convocatorias');
    Route::get('SeguimientoEgresados/libroActas','libroActas');
    Route::get('SeguimientoEgresados/resultadosEntrevista/{idEstudiante}','resultadosEntrevista');
    Route::get('SeguimientoEgresados/informacionEgresados','informacionEgresados');
});



































