<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Autor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function create()// tenho que ajeitar isso dps
    {
        $livros = Livro::all();
        $autors = Autor::all();
        return view('livro.CadastroLivro', compact('livros', 'autors'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Livro::create($request->all());
        return redirect()->route('livro.create');
    }

    public function edit($id){
        $livros = Livro::where('id', $id)->first();
        $autors = Autor::all();
        if(!empty($livros)){
            return view('admin.livro.EdicaoLivro', compact('livros', 'autors'));
        }
        else{
            return redirect()->route('livro.create')->with('error', 'Livro não encontrado.');
        }
    }

    public function update(Request $request, $id){
        // dd($request->all());
        $data = [
            'titulo' => $request->titulo,
            'sinopse' => $request->sinopse,
            'data_lancamento' => $request->data_lancamento,
            'autor_id' => $request->autor_id,// revisar dps
        ];
        Livro::where('id', $id)->update($data);
        return redirect()->route('livro.create');
    }

    public function destroy($id){
        Livro::where('id', $id)->delete();
        return redirect()->route('livro.create');
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $livros = $query
            ? Livro::where('titulo', 'like', "%{$query}%")->get()
            : collect();

        return view('search', compact('livros'));
    }
}
