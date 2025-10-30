<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new Post();

        $post->category_post = 'Categoria de prueba 1';
        $post->title_post = 'Título de prueba 1';
        $post->content_post = 'Contenido de prueba';
        $post->published_at = now();

        $post->save();

        $post = new Post();

        $post->category_post = 'Categoria de prueba 2';
        $post->title_post = 'Título de prueba 2';
        $post->content_post = 'Contenido de prueba';
        $post->published_at = now();

        $post->save();

        $post = new Post();

        $post->category_post = 'Categoria de prueba 3';
        $post->title_post = 'Título de prueba 3';
        $post->content_post = 'Contenido de prueba';
        $post->published_at = now();

        $post->save();

        $post = new Post();

        $post->category_post = 'Categoria de prueba 1';
        $post->title_post = 'Título de prueba 1';
        $post->content_post = 'Contenido de prueba';
        $post->published_at = now();

        $post->save();
    }
}
