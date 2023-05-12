<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActaEgresados;

class ActaEgresadoController extends Controller
{
    //metodo para la pagina principal de Actas de egresados
    public function index(){
        //usamos las sentencias de eloquent
        $actas = ActaEgresados::orderBy('acta_egresado_id','desc')->paginate();
        return view("actasEgresados.index", compact('actas'));
    }
    
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("actasEgresados.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $acta = new ActaEgresados();

        $acta->reunion_id = $request->reunion_id;
        $acta->junta_directiva_egresado_id = $request->junta_directiva_egresado_id;
        $acta->egresado_id = $request->egresado_id;
        $acta->resultado_acta_egresado = $request->resultado_acta_egresado;
        $acta->firma_responsable_acta_egresado = $request->firma_responsable_acta_egresado;
        $acta->save();
        return redirect()->route('actasEgresados.show',$acta);
    }

    //metodo para mostrar los detalles del registro
    public function show($egresado_id){
        $acta = ActaEgresados::where('acta_egresado_id', $egresado_id)->first();
        return view('actasEgresados.show', compact('acta'));
        //compact se usa para enviar una variable a la vista
    }
}
