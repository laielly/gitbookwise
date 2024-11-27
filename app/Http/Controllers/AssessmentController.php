<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leitura;
use App\Models\Avaliacao;

class AssessmentController extends Controller
{
    public function create($leitura_id)
    {
        $leitura = Leitura::with('livro')->findOrFail($leitura_id);

        return view('avaliacao', compact('leitura'));
    }

    public function store(Request $request)
    {
        // Validação dos dados enviados pelo formulário
        $validated = $request->validate([
            'avaliacao' => 'required|integer|min:1|max:5',
            'comentario' => 'required|string|max:2000',
            'leitura_id' => 'required|exists:leituras,id',  // A validação é para a tabela leituras
        ]);

        // Criação da avaliação
        Avaliacao::create([
            'avaliacao' => $validated['avaliacao'],
            'comentario' => $validated['comentario'],
            'data' => now(),
            'leitura_id' => $validated['leitura_id'],  // Usando leitura_id para associar a avaliação
        ]);

        // Redireciona o usuário para a estante com sucesso
        return redirect()->route('estante')->with('success', 'Avaliação enviada com sucesso!');
    }



}
