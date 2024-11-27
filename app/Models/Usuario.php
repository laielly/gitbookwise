<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{


    protected $fillable = ['nome', 'email', 'senha', 'perfil', 'foto', 'datanascimento', 'biografia', 'usuariocol'];

    public function livros()
    {
        return $this->hasMany(Livro::class, 'responsavel_id');
    }

    public function leituras()
    {
        return $this->hasMany(Leitura::class);
    }

}
