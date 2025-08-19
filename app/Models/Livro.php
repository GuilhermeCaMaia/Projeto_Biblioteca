<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id');
    }

    protected $fillable = [
        'titulo',
        'sinopse',
        'data_lancamento',
        'autor_id',
    ];
}
