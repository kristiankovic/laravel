@extends('layouts.app')

@section('title', 'Vista de todos los posts')

@section('header')
    <div class="m-4">
        <h1>Bienvenido a la vista de los posts guardados</h1>
    </div>
@endsection

@section('content')

    <div class="grid xxl:grid-cols-4 xl:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 gap-4">
        @foreach ($posts as $post)
            <div class="grid justify-self-center">
                <a href="#"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $post->title_post ?>
                    </h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400"><?= $post->content_post ?></p>
                </a>
            </div>
        @endforeach
    </div>
@endsection
