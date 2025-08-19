@extends('admin.layoutAdmin')
@section('title', 'Cadastro de Livro')

@section('content')
<form action="{{ route('livro.store') }}" method="POST" class="row g-3">
    @csrf
    <div class="col-md-4">
        <label for="validationServer01" class="form-label">Titulo do livro</label>
        <input type="text" name="titulo" class="form-control" id="validationServer01" required>
    </div>
    <div></div>
    <div class="col-md-4">
        <label for="validationServer02" class="form-label">Sinopse</label>
        <textarea class="form-control" id="sinopse" name="sinopse" rows="5" placeholder="Digite a sinopse aqui..." required></textarea>
    </div>
    <div></div>
    <div class="col-md-6">
        <label for="validationServer03" class="form-label">Data da publicação</label>
        <input type="date" name="data_lancamento" class="form-control" id="data_lancamento" required>
    </div>
    <div class="col-md-3">
        <label for="validationServer04" class="form-label">Autor</label>
        <select class="form-select" id="validationServer04" name="autor_id" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">selecione o autor</option>
            @foreach($autors as $autor)
                <option value="{{$autor->id}}">{{$autor->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" name="submit" type="submit">Salvar</button>
    </div>
</form>
<br></br>
<h1>Lista de Livros</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($livros as $livro)
        <tr>
            <th scope="row">{{$livro->id}}</th>
            <td>{{$livro->titulo}}</td>
            <td>{{$livro->autor->nome}}</td>
            <td>
                <a href="{{route('livro.edit', ['id'=>$livro->id])}}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 18">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                </a>
            </td>
            <td>
                <form action="{{route('livro.destroy', ['id'=>$livro->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-reverse-fill" viewBox="0 0 16 16">
                            <path d="M0 3a2 2 0 0 1 2-2h7.08a2 2 0 0 1 1.519.698l4.843 5.651a1 1 0 0 1 0 1.302L10.6 14.3a2 2 0 0 1-1.52.7H2a2 2 0 0 1-2-2zm9.854 2.854a.5.5 0 0 0-.708-.708L7 7.293 4.854 5.146a.5.5 0 1 0-.708.708L6.293 8l-2.147 2.146a.5.5 0 0 0 .708.708L7 8.707l2.146 2.147a.5.5 0 0 0 .708-.708L7.707 8z"/>
                        </svg>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
