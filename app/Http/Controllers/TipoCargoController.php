<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoCargos;
class TipoCargoController extends Controller
{
            //metodo para la pagina principal de Gestion de Practicas
            public function index(){
                //usamos las sentencias de eloquent
                $tipos = TipoCargos::orderBy('tipo_cargo_id','desc')->paginate();
                return view("tipoCargos.index", compact('tipos'));
            }
        
            //metodo para crear un nuevo registro de practicante
            public function create(){
                return view("tipoCargos.create");
            }
        
            //metodo para almacenar datos de formulario
            public function store(Request $request){
                $tipo = new TipoCargos();
        
                $tipo->decripcion_cargo = $request->decripcion_cargo;
                $tipo->save();
        
                return redirect()->route('tipoCargos.show',$tipo);
            }
        
            //metodo para mostrar los detalles del registro
            public function show($tipoId){
                $tipo = TipoCargos::where('tipo_cargo_id', $tipoId)->first();
                return view('tipoCargos.show', compact('tipo'));
            }
}
