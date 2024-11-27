<?php

namespace App\Http\Controllers;


use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
        ]);

        Like::create([
            'post_id' => $request->post_id,
        ]);

        return back(); // Redirecionar de volta
    }
}

