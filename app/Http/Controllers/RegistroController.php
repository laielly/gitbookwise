<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistroController extends Controller
{
   /**
     * @return \Iluminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @return \Iluminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     *
     * @return \Iluminate\Http\Request $request
     * @return \Iluminate\Http\Response
     */

     public function store(Request $request)
     {
        $request->validate([
             'name' => 'required',
             'email' => 'required',
             'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);


        return redirect()->route('feed')
             ->with('success', 'Usuário cadastrado com sucesso.');
        }

    /**
     *
     * @param \App\Models\User $professor
     * @return \Iluminate\Http\User
     */

    public function show(User $user)
    {
        return view('feed');
    }

    /**
     *
     * @param \App\Models\Professor $professor
     * @return \Iluminate\Http\Response
     */

    public function edit(User $user)
    {
        //
    }

    /**
     *
     * @param \Iluminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Iluminate\Http\Response
     */

    public function update(Request $request, string $id)
    {
        //
    }

    /**
     *
     * @param \App\Models\User $user
     * @return \Iluminate\Http\Response
     */

    public function destroy(User $user)
    {
        $user-> delete();
    }
}
