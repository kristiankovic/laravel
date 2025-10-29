@extends('pages.inicio')

@section('title', 'Mi perfil')

@section('header')
    <h1>Ingreso de datos</h1>
@endsection

@section('content')
    <form action="{{route('datos')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection