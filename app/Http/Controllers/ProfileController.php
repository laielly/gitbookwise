<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{
    public function update(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Atualizar informações do usuário autenticado
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Atualizar a senha apenas se ela for fornecida
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Salvar alterações
        $user->save();

        // Redirecionar de volta com uma mensagem de sucesso
        return redirect()->back()->with('success', 'Perfil atualizado com sucesso!');
    }
}
