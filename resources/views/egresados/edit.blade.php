@extends('layouts.plantilla')

@section('title','Actualizar Registro')

@section('content')

    <h1>En esta pagina podra editar un registro</h1>
    <form action="{{route('egresados.update', $egresado)}}" method="POST">

        @csrf

        @method('put')

        <label> Nombre:
            <br>
            <input type="text" name="nombre_egresado" value="{{$egresado->nombre_egresado}}">
        </label>
        <br><br>
        <label> Grado de Instruccion:
            <br>
            <input type="text" name="grado_instruccion_egresado" value="{{$egresado->grado_instruccion_egresado}}">
        </label>
        <br><br>
        <label> Especializacion:
            <br>
            <input type="text" name="especializacion_egresado" value="{{$egresado->especializacion_egresado}}">
        </label>
        <br><br>
        <label> Fecha egreso:
            <br>
            <input type="datetime" name="fecha_egreso_egresado" value="{{$egresado->fecha_egreso_egresado}}">
        </label>
        <br><br>
        <label> Fecha titulo:
            <br>
            <input type="datetime" name="fecha_titulo_egresado" value="{{$egresado->fecha_egreso_egresado}}">
        </label>
        <br><br>
        <label> Fecha maestria:
            <br>
            <input type="datetime" name="fecha_maestria_egresado" value="{{$egresado->fecha_maestria_egresado}}">
        </label>
        <br><br>
        <label> Fecha titulo:
            <br>
            <input type="datetime" name="fecha_titulo_egresado" value="{{$egresado->fecha_egreso_egresado}}">
        </label>
        <br><br>
        <label> Fecha doctorado:
            <br>
            <input type="datetime" name="fecha_doctorado_egresado" value="{{$egresado->fecha_doctorado_egresado}}">
        </label>
        <br><br>

        <label> Id de empresa:
            <br>
            <input type="number" name="empresa_id" value="{{$egresado->empresa_id}}">
        </label>
        <br><br>

        <label> Cargo de empresa egresado:
            <br>
            <input type="text" name="cargo_empresa_egresado" value="{{$egresado->cargo_empresa_egresado}}">
        </label>
        <br><br>

        <label> Tiempo laboral:
            <br>
            <input type="datetime" name="tiempo_laboral_egresado" value="{{$egresado->tiempo_laboral_egresado}}">
        </label>
        <br><br>
        
        <button type="submit">Actualizar Formulario</button>
    </form>