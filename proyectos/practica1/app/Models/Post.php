<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    //si no se especifica toma el plural de la clase

    //tiene que ser TABLE si o si
    protected $table = 'post';

    use HasFactory;

    protected function casts(): array{
        return[
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }
}