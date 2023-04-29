<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeguimientoEgresadosController extends Controller
{
        //metodo para la pagina de formularios de seguimiento
        public function formulariosSeguimiento(){
            return view("seguimientoEgresados.formulariosSeguimiento");
        }
        //metodo para mostrar la lista de registros de egresados
        public function listaRegistrosEgresados(){
            return view("seguimientoEgresados.listaRegistrosEgresados");
        }
        //metodo para mostrar las convocatorias y conformacion de juntad directiva
        public function convocatorias(){
            return view('seguimientoEgresados.convocatorias');
        }
        //metodo para mostrar el libro de actas
        public function libroActas(){
            return view('seguimientoEgresados.libroActas');
        }
        //metodo para visualizar la guia de entrevista y evaluacion
        public function resultadosEntrevista($idEstudiante){
            return view('seguimientoEgresados.resultadosEntrevista',compact('idEstudiante'));
        }
        //metodo para visualizar la informacion recopilada de los egresados
        public function informacionEgresados(){
            return view('seguimientoEgresados.informacionEgresados');
        }
}
