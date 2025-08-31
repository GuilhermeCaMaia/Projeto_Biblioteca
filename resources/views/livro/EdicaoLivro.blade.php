@extends('layouts.layout')
@section('title', 'Cadastro de Livro')

@section('content')
<div class="container">
    <h1>Editar Livro</h1>
    <form action="{{ route('livro.update', ['id'=>$livros->id]) }}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Titulo do livro</label>
            <input type="text" name="titulo" value="{{ $livros->titulo }}" class="form-control" id="validationServer01" required>
        </div>
        <div></div>
        <div class="col-md-4">
            <label for="validationServer02" class="form-label">Sinopse</label>
            <textarea class="form-control" name="sinopse" value="{{ $livros->sinopse }}" rows="5" placeholder="Digite a sinopse aqui..." required></textarea>
        </div>
        <div></div>
        <div class="col-md-6">
            <label for="validationServer03" class="form-label">Data da publicação</label>
            <input type="date" name="data_lancamento" value="{{ $livros->data_lancamento}}" class="form-control" id="data_lancamento" required>
        </div>
        <div class="col-md-3">
            <label for="validationServer04" class="form-label">Autor</label>
            <select class="form-select" id="validationServer04" name="autor_id" aria-describedby="validationServer04Feedback" required>
                <option selected disabled value="">selecione o autor</option>
                @foreach($autors as $autor)
                    <option value="{{$autor->id}}"
                        {{ (isset($livros) && $autor->id == $livros->autor_id) ? 'selected' : ''}}>
                        {{$autor->nome}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Editar</button>
        </div>
    </form>
</div>
@endsection
