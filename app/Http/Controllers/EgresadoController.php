<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Egresados;

class EgresadoController extends Controller
{
    //metodo para la pagina principal de Actas de egresados
    public function index(){
        //usamos las sentencias de eloquent
        $egresados = Egresados::orderBy('id','desc')->paginate();
        return view("egresados.index", compact('egresados'));
    }
    
    //metodo para crear un nuevo registro de practicante
    public function create(){
        return view("egresados.create");
    }

    //metodo para almacenar datos de formulario
    public function store(Request $request){
        $egresado  = new Egresados();

        $egresado->nombre_egresado = $request->nombre_egresado;
        $egresado->grado_instruccion_egresado = $request->grado_instruccion_egresado;
        $egresado->especializacion_egresado = $request->especializacion_egresado;
        $egresado->fecha_egreso_egresado = $request->fecha_egreso_egresado;
        $egresado->fecha_titulo_egresado = $request->fecha_titulo_egresado;
        $egresado->fecha_maestria_egresado = $request->fecha_maestria_egresado;
        $egresado->fecha_doctorado_egresado = $request->fecha_doctorado_egresado;
        $egresado->empresa_id = $request->empresa_id;
        $egresado->cargo_empresa_egresado = $request->cargo_empresa_egresado;
        $egresado->tiempo_laboral_egresado = $request->tiempo_laboral_egresado;
        
        $egresado->save();
        return redirect()->route('egresados.show',$egresado);
    }

    //metodo para mostrar los detalles del registro
    public function show(Egresados $egresado){
        return view('egresados.show', compact('egresado'));
    }

    public function edit(Egresados $egresado){
        return view('egresados.edit', compact('egresado'));
    }

    public function update(Request $request, Egresados $egresado){
        $egresado->nombre_egresado = $request->nombre_egresado;
        $egresado->grado_instruccion_egresado = $request->grado_instruccion_egresado;
        $egresado->especializacion_egresado = $request->especializacion_egresado;
        $egresado->fecha_egreso_egresado = $request->fecha_egreso_egresado;
        $egresado->fecha_titulo_egresado = $request->fecha_titulo_egresado;
        $egresado->fecha_maestria_egresado = $request->fecha_maestria_egresado;
        $egresado->fecha_doctorado_egresado = $request->fecha_doctorado_egresado;
        $egresado->empresa_id = $request->empresa_id;
        $egresado->cargo_empresa_egresado = $request->cargo_empresa_egresado;
        $egresado->tiempo_laboral_egresado = $request->tiempo_laboral_egresado;
        
        $egresado->save();

        return redirect()->route('egresados.show', $egresado);
    }

    public function destroy(Egresados $egresado)

        {
            $egresado->delete();
            return redirect()->route('egresados.index')->with('success', 'Registro eliminado correctamente.');
        }

}
