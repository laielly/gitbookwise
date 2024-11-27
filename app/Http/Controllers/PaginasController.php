<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function login(){
        return view("login");
    }

    public function register(){
        return view("register");
    }

    public function addbook(){
        return view("addbook");
    }

    public function avaliacao(){
        return view("avaliacao");
    }

    public function comentarios(){
        return view("comentarios");
    }

    public function estante(){
        return view("estante");
    }

    public function feed(){
        return view("feed");
    }

    public function index(){
        return view("index");
    }

    public function profile(){
        return view("profile");
    }
}
