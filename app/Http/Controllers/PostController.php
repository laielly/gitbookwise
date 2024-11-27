<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use Illuminate\Http\Request;

class PostController extends Controller 
{
    // Método para exibir o feed de posts
    public function index()
    {
        $posts = Avaliacao::all(); // Recupera todos os posts do banco de dados
        return view('feed', compact('posts'));

    }
}
