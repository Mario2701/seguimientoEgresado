@extends('layouts.plantillaShowEmpresa')
@section('title','Empresa: ' . $empresa->nombre_empresa)
@section('content')
    <h1>Empresa: {{$empresa->nombre_empresa}}</h1>
    <a href="{{route('empresas.index')}}">Volver a practicas</a>
    <p><strong>El representante de la empresa es: {{$empresa->representante_empresa}}</strong></p>
@endsection


