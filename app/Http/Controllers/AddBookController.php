<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddBookController extends Controller
{
    public function x() {
        // Obtém o usuário autenticado
        $user = Auth::user();

        // Obtém todas as avaliações
        $posts = Avaliacao::all();

        // Verifica se o usuário está autenticado
        if (!$user) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para adicionar um livro.');
        }

        // Retorna a view 'addbook' com as variáveis 'user' e 'posts'
        return view('addbook', compact('user', 'posts'));
    }

    public function store(Request $request) {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:200',
            'autor' => 'required|string|max:200',
            'editora' => 'required|string|max:200',
            'anoPublicacao' => 'required|integer',
            'genero' => 'required|string|max:200',
            'descricao' => 'nullable|string|max:45',
            'responsavel_id' => 'nullable|exists:users,id', // Ajuste conforme a sua tabela de usuários
        ]);

        // Criação do livro
        $livro = new Livro();
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->editora = $request->input('editora');
        $livro->anoPublicacao = $request->input('anoPublicacao');
        $livro->genero = $request->input('genero');
        $livro->descricao = $request->input('descricao');
        $livro->responsavel_id = $request->input('responsavel_id'); // Pode ser null ou um ID válido
        $livro->save();

        // Redireciona para o perfil com uma mensagem de sucesso
        return redirect()->route('profile')->with('success', 'Livro adicionado com sucesso!');
    }
}
