<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Livro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function create(){
        $autors = Autor::all();
        $livros = Livro::all();
        return view('user.catalogo', compact('autors', 'livros'));
    }
}
