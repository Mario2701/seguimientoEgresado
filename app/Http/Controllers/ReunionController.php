<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reuniones;

class ReunionController extends Controller
{
        //metodo para la pagina principal de Gestion de Practicas
        public function index(){
            //usamos las sentencias de eloquent
            $reuniones = Reuniones::orderBy('reunion_id','desc')->paginate();
            return view("reuniones.index", compact('reuniones'));
        }
    
        //metodo para crear un nuevo registro de practicante
        public function create(){
            return view("reuniones.create");
        }
    
        //metodo para almacenar datos de formulario
        public function store(Request $request){
            $reunion = new Reuniones();
    
            $reunion->egresado_id = $request->egresado_id;
            $reunion->fecha_reunion = $request->fecha_reunion;
            $reunion->lugar_reunion = $request->lugar_reunion;
            $reunion->agenda_reunion = $request->agenda_reunion;
            $reunion->objetivo_reunion = $request->objetivo_reunion;
            
            $reunion->save();
    
            return redirect()->route('reuniones.show',$reunion);
        }
    
        //metodo para mostrar los detalles del registro
        public function show($reunionId){
            $reunion = Reuniones::where('reunion_id', $reunionId)->first();
            return view('reuniones.show', compact('reunion'));
        }
}
