<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function create()
    {
        $autors = Autor::all();
        return view('admin.autor.CadastroAutor', compact('autors'));
    }

    public function store(Request $request)
    {
        Autor::create($request->all());
        return redirect()->route('autor.create');
    }

    public function edit($id)
    {
        $autors = Autor::where('id', $id)->first();
        if (!empty($autors)) {
            return view('admin.autor.EdicaoAutor', compact('autors'));
        }
        else{
            return redirect()->route('autor.create')->with('error', 'Autor não encontrado.');
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'nacionalidade' => $request->nacionalidade,
        ];
        Autor::where('id', $id)->update($data);
        return redirect()->route('autor.create');
    }

    public function destroy($id)
    {
        Autor::where('id', $id)->delete();
        return redirect()->route('autor.create');
    }
}
