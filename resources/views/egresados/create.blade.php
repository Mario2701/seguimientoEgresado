@extends('layouts.plantillaCreateEgresado')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros para cada Cronograma de Egresados</h1>

    <form action="{{route('egresados.store')}}" method="POST">
        
        @csrf

        <label> Nombre completo del egresado:
            <br>
            <input type="text" name="nombre_egresado">
        </label>
        <br><br>
        <label> Grado de instruccion:
            <br>
            <input type="text" name="grado_instruccion_egresado">
        </label>
        <br><br>
        <label> Especializacion:
            <br>
            <input type="text" name="especializacion_egresado">
        </label>
        <br><br>
        <label> Fecha de egreso:
            <br>
            <input type="datetime" name="fecha_egreso_egresado">
        </label>
        <br><br>
        <label> Fecha de titulo:
            <br>
            <input type="datetime" name="fecha_titulo_egresado">
        </label>
        <br><br>
        <label> Fecha de maestria:
            <br>
            <input type="datetime" name="fecha_maestria_egresado">
        </label>
        <br><br>
        <label> Fecha de doctorado:
            <br>
            <input type="datetime" name="fecha_doctorado_egresado">
        </label>
        <br><br>
        <label> Empresa donde labora:
            <br>
            <input type="number" name="empresa_id">
        </label>
        <br><br>
        <label> Cargo en la empresa:
            <br>
            <input type="text" name="cargo_empresa_egresado">
        </label>
        <br><br>
        <label> Tiempo que labora:
            <br>
            <input type="text" name="tiempo_laboral_egresado">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection