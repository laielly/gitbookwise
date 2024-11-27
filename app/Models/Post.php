<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Definindo os campos que podem ser preenchidos (mass assignment)
    protected $fillable = ['title', 'content'];

    // Define a relação com o modelo Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Define a relação com o modelo Like
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}

