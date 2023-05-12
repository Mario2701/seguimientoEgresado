@extends('layouts.plantillaIndexTipoCargo')
@section('title','Tipo de cargo')
@section('content')
    <h1>Bienvenido a la pagina principal</h1>

    <a href="{{route('tipoCargos.create')}}">Nuevo Registro</a>

    <ul>
        @foreach ($tipos as $tipo)
            <li>
               <a href="{{route('tipoCargos.show', $tipo->tipo_cargo_id)}}">{{$tipo->decripcion_cargo}}</a>
            </li>
        @endforeach 
    </ul>

    {{$tipos->links()}}

@endsection