{{-- COMPONENTE DEL LAYOUT --}}
<x-app-layout>

    {{-- <x-slot name="title">App</x-slot> --}}
    
    <div class="max-w-4xl mx-auto">
        <p><strong>Contenido de la plantilla</strong></p>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum modi accusantium aspernatur libero
            voluptatem nemo repellat natus non est molestiae, voluptatum quisquam architecto optio nulla, obcaecati
            cupiditate, porro praesentium! Illum?
        </p>

        {{-- LLAMADO AL COMPONENTE /views/components/alert.blade.php --}}
        {{-- al agregar una clase hace merge con las establecidas del componente --}}

        {{-- COMPONENTES ANÓNIMOS --}}
        <x-alertClass type="warning" class="my-4">

            <x-slot name="title">Título de la alerta</x-slot>
            <x-slot name="body">Componenete anónimo</x-slot>

        </x-alertClass>

        {{-- COMPONENTES DE CLASE --}}
        <x-alert type="success" title="Alerta success" body="Componente de clase">

        </x-alert>

        <p>Hola mundo</p>
    </div>

</x-app-layout>

{{-- PLANTILLA --}}
@extends('layouts.app')

{{-- FORMA 1 --}}

{{-- @section('title')
    Laravel 12 desde la plantilla
@endsection --}}

{{-- FORMA 2 --}}

@section('title', 'Laravel | desde la plantilla')

@push('css')
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
@endpush

@section('header')
    <div class="m-4">
        <h1>Bienvenido al inicio</h1>
    </div>
@endsection

@push('css')
    <style>
        body{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 1.2rem;
        }
    </style>
@endpush
@section('content')
    
    <div class="max-w-4xl mx-auto">
        <p><strong>Contenido de la plantilla</strong></p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum modi accusantium aspernatur libero
            voluptatem nemo repellat natus non est molestiae, voluptatum quisquam architecto optio nulla, obcaecati
            cupiditate, porro praesentium! Illum?
        </p>

        {{-- LLAMADO AL COMPONENTE /views/components/alert.blade.php --}}
        {{-- al agregar una clase hace merge con las establecidas del componente --}}

        {{-- COMPONENTES ANÓNIMOS --}}
        <x-alertClass type="warning" class="my-4">

            <x-slot name="title">Título de la alerta</x-slot>
            <x-slot name="body">Cuerpo de la alerta</x-slot>

        </x-alertClass>

        {{-- COMPONENTES DE CLASE --}}
        <x-alert type="success" title="Alerta success" body="Cuerpo de la alerta">

        </x-alert>

        <p>Hola mundo</p>
    </div>
@endsection