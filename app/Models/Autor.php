<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    public function livros()
    {
        return $this->hasMany(Livro::class, 'autor_id');
    }

    protected $fillable = [
        'nome',
        'nacionalidade',
    ];
}
