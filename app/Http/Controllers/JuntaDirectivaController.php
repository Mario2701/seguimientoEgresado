<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JuntaDirectaEgresados;

class JuntaDirectivaController extends Controller
{
         //metodo para la pagina principal de Actas de egresados
        public function index(){
            //usamos las sentencias de eloquent
            $juntas = JuntaDirectaEgresados::orderBy('junta_directiva_egresado_id','desc')->paginate();
            return view("juntaDirectiva.index", compact('juntas'));
        }
        
        //metodo para crear un nuevo registro de practicante
        public function create(){
            return view("juntaDirectiva.create");
        }
    
        //metodo para almacenar datos de formulario
        public function store(Request $request){
            $junta = new JuntaDirectaEgresados();
            $junta->egresado_id = $request->egresado_id;
            $junta->tipo_cargo_id = $request->tipo_cargo_id;
            $junta->periodo_directiva = $request->periodo_directiva;
            $junta->save();
            return redirect()->route('juntaDirectiva.show',$junta);
        }
    
        //metodo para mostrar los detalles del registro
        public function show($juntaId){
            $junta = JuntaDirectaEgresados::where('junta_directiva_egresado_id', $juntaId)->first();
            return view('juntaDirectiva.show', compact('junta'));
        }
}
