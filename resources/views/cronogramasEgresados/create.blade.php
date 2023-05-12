@extends('layouts.plantillaCronogramaEgresado')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros para cada Cronograma de Egresados</h1>

    <form action="{{route('cronogramasEgresados.store')}}" method="POST">
        
        @csrf

        <label> Numero del Cronograma:
            <br>
            <input type="text" name="numero_cronograma">
        </label>
        <br><br>
        <label> Archivo de la Actividad:
            <br>
            <input type="text" name="actividad_cronograma">
        </label>
        <br><br>
        <label> Fecha:
            <br>
            <input type="datetime" name="fecha_cronograma">
        </label>
        <br><br>
        <label> Periodo:
            <br>
            <input type="text" name="periodo_cronograma">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection