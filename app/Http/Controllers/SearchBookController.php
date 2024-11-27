<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Leitura;


class SearchBookController extends Controller
{


    public function buscarLivros(Request $request)
    {
        $titulo = $request->input('titulo'); // Acessa o título da pesquisa

        // Filtra os livros pelo título fornecido
        $livros = Livro::when($titulo, function($query) use ($titulo) {
            return $query->where('titulo', 'LIKE', '%' . $titulo . '%');
        })->get();

        // Obtém as leituras do usuário logado que possuem uma data de término
        $leiturasLidas = Leitura::with('livro')
            ->where('usuario_id', auth()->id())
            ->whereNotNull('data_fim') // Somente as leituras com data_fim preenchida
            ->get();

        return view('estante', [
            'livros' => $livros, // Passa os livros encontrados
            'leituras' => $leiturasLidas, // Passa as leituras finalizadas
            'nomePesquisado' => $titulo // Passa o título pesquisado (se houver)
        ]);
    }




}
