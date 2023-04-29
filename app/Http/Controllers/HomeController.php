<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Creando un metodo general
    public function __invoke(){
        return view('home');
    }
}
