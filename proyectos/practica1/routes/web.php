<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use PHPUnit\Framework\Attributes\PostCondition;
use Ramsey\Uuid\Type\Time;

Route::get('/', function () {
    return view('welcome');
});

// RUTA DE LAS NUEVAS VISTAS desde views 
Route::get('/perfil', function () {
    return view('pages.perfil');
});

//Agrupacion de rutas

//Todas las rutas bajo ese controller pertenecen al HomeController
Route::controller(HomeController::class)->group(function(){

    Route::get('/inicio', 'index')->name('home');
    Route::get('/msg/{nombre}', 'msg')->name('msg');
    Route::get('/form', 'mostrarForm')->name('form');
    //El name('') es el action que recibe el form
    Route::post('/form-recibir', 'recibirForm')->name('datos');

});

Route::get('/prueba', function(){
    
    //Crear post
    // //instanciar un objeto de la tabla
    $post = new Post;

    // //asignar los valores con los mismos nombres de las columnas de la tabla
    // $post->category_post = 'Categoria de prueba 1';
    // $post->title_post = 'Título de prueba 1';
    // $post->content_post = 'contenido de prueba 1';

    // //guarda el objeto en la tabla
    // $post->save();

    // return $post;

    //Buscar post por ID
    //$post = Post::find(9);
    
    //Buscar post por nombre y actualizarlo
    // $post = Post::where('title_post', 'Título de prueba 1')->first();

    // $post->category_post = 'Desarrollo FrontEnd';
    // $post->title_post = 'Introducción a Laravel 12.35.11';
    // $post->save();

    // return ($post) ? $post : 'No se encontro el el registro';

    // $posts = Post::all();

    // return $posts;

    // $postsFiltrados = Post::where('id', '>', '2')->get();
    // $postGet = Post::get();

    // return [$postsFiltrados, $postGet];

    //ORDENAMIENTO
    // $posts = Post::orderBy('id', 'asc')->select('id', 'title_post')
    //                 ->take(2)->get();

    // return $posts;

    // $post = Post::find(1);
    // $post->is_active = 0;

    // $post->save();

    // dd($post->is_active);
});

Route::controller(PostController::class)->group(function(){

    Route::get('/posts', 'index')->name('inicio');
    Route::get('/posts/create', 'create')->name('create');
});

Route::get('/posts/{id}', [PostController::class, 'show']);