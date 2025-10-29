@extends('pages.inicio')

@section('title', 'Datos')

@section('header')
    <h1>Datos ingresados</h1>
@endsection

@section('content')
    <x-card-user name="{{$nombre}}" description="Bienvenido, {{$nombre}}">
        
    </x-card-user>
@endsection