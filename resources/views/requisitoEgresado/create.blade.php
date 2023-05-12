@extends('layouts.plantillaCreateRequisitoEgresado')
@section('title','Nuevo Registro')
@section('content')
    <h1>Aqui podras crear registros</h1>

    <form action="{{route('requisitoEgresado.store')}}" method="POST">
        
        @csrf

        <label> Id del Egresado:
            <br>
            <input type="number" name="egresado_id">
        </label>
        <br><br>
        <label> Estado del estudiate:
            <br>
            <input type="number" name="estado_estudiante_id">
        </label>
        <br><br>
        <label> Solicitud:
            <br>
            <input type="text" name="solicitud_decano_egresado">
        </label>
        <br><br>
        <label> Recibo:
            <br>
            <input type="text" name="recibo_dt_egresado">
        </label>
        <br><br>
        <label> Certificado del egresado:
            <br>
            <input type="text" name="certificado_egresado">
        </label>
        <br><br>
        <label> Fotografia:
            <br>
            <input type="text" name="fotografia_egresado">
        </label>
        <br><br>
        <label> Certificado de ofimatica:
            <br>
            <input type="text" name="certificado_ofimatica_egresado">
        </label>
        <br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

@endsection