<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leitura;
use Illuminate\Support\Facades\Auth;

class ReadingController extends Controller
{
    public function store(Request $request)
    {
        // Valida os dados recebidos
        $validated = $request->validate([
            'livro_id' => 'required|exists:livros,id',
        ]);

        // Cria a leitura
        $leitura = Leitura::create([
            'usuario_id' => Auth()->id(), // Obtém o ID do usuário logado
            'livro_id' => $validated['livro_id'],
            'data_inicio' => now(), // Data de início é agora
            'data_fim' => now(), // Data de fim é agora (pode ajustar se necessário)
        ]);

        return response()->json([
            'message' => 'Leitura registrada com sucesso!',
            'leitura' => $leitura,
        ]);



    }

    public function listarLidas()
    {
        // Obtém as leituras do usuário logado que possuem uma data de término
        $leiturasLidas = Leitura::with('livro') // Assume que há uma relação 'livro' no modelo
            ->where('usuario_id', auth()->id())
            ->whereNotNull('data_fim') // Somente as leituras com data_fim preenchida
            ->get();

        return view('estante', ['leituras' => $leiturasLidas]);
    }


}
