<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormatosTiposEvaluaciones;

class FormatoEvaluacionController extends Controller
{
     //metodo para la pagina principal de Actas de egresados
    public function index(){
        //usamos las sentencias de eloquent
        $formatos = FormatosTiposEvaluaciones::orderBy('formato_tipo_evaluacion_id','desc')->paginate();
        return view("formatoEvaluacion.index", compact('formatos'));
    }
    
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("formatoEvaluacion.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $formato  = new FormatosTiposEvaluaciones();
        $formato->rubrica_evaluacion = $request->rubrica_evaluacion;
        $formato->resultado_evaluacion = $request->resultado_evaluacion;
        $formato->periodo_evaluacion = $request->periodo_evaluacion;
        $formato->save();
        return redirect()->route('formatoEvaluacion.show',$formato);
    }

    //metodo para mostrar los detalles del registro
    public function show($formatoId){
        $formato = FormatosTiposEvaluaciones::where('formato_tipo_evaluacion_id', $formatoId)->first();
        return view('formatoEvaluacion.show', compact('formato'));
    }
}
