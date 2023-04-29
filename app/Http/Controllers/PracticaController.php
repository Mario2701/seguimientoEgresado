<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticaController extends Controller
{
    //metodo para la pagina principal de Gestion de Practicas
    public function index(){
        return view("practicas.index");
    }
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("practicas.create");
    }
    //metodo para mostrar los detalles del registro
    public function show($procedimiento){
        return view('practicas.show', compact('procedimiento'));
    }
}
