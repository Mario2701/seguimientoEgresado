<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluacionTrabajos;

class EvaluacionTrabajoController extends Controller
{
         //metodo para la pagina principal de Actas de egresados
        public function index(){
            //usamos las sentencias de eloquent
            $evaluacionT = EvaluacionTrabajos::orderBy('evaluacion_trabajos_id','desc')->paginate();
            return view("evaluacionTrabajo.index", compact('evaluacionT'));
        }
        
        //metodo para crear un nuevo registro de practicante
        public function create(){
            return view("evaluacionTrabajo.create");
        }
    
        //metodo para almacenar datos de formulario
        public function store(Request $request){
            $evaluacionT  = new EvaluacionTrabajos();
            $evaluacionT->descripcion_evaluacion_trabajo = $request->descripcion_evaluacion_trabajo;
            $evaluacionT->porcentaje_avance_evaluacion_trabajo = $request->porcentaje_avance_evaluacion_trabajo;
            $evaluacionT->save();
            return redirect()->route('evaluacionTrabajo.show',$evaluacionT);
        }
    
        //metodo para mostrar los detalles del registro
        public function show($evaluacionId){
            $evaluacionT = EvaluacionTrabajos::where('evaluacion_trabajos_id', $evaluacionId)->first();
            return view('evaluacionTrabajo.show', compact('evaluacionT'));
        }
}
