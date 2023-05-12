<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluacionEgresados;

class EvaluacionEgresadoController extends Controller
{
     //metodo para la pagina principal de Actas de egresados
    public function index(){
        //usamos las sentencias de eloquent
        $evaluaciones = EvaluacionEgresados::orderBy('evaluacion_egresado_id','desc')->paginate();
        return view("evaluacionEgresados.index", compact('evaluaciones'));
    }
    
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("evaluacionEgresados.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $evaluacion  = new EvaluacionEgresados();

        $evaluacion->empresa_id = $request->empresa_id;
        $evaluacion->formato_tipo_evaluacion_id = $request->formato_tipo_evaluacion_id;
        $evaluacion->save();
        return redirect()->route('evaluacionEgresados.show',$evaluacion);
    }

    //metodo para mostrar los detalles del registro
    public function show($evaluacion_id){
        $evaluacion = EvaluacionEgresados::where('evaluacion_egresado_id', $evaluacion_id)->first();
        return view('evaluacionEgresados.show', compact('evaluacion'));
    }
}
