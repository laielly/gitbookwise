<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes'; 

    protected $fillable = ['avaliacao', 'comentario', 'data', 'leitura_id'];

    public function leitura()
    {
        return $this->belongsTo(Leitura::class);
    }
}
