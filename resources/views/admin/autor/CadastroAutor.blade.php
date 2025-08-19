@extends('admin.layoutAdmin')
@section('title', 'Cadastro de Autor')

@section('content')
<div class="container">
<form action="{{ route('autor.store') }}" method="POST" class="row g-3">
    @csrf
    <div class="col-md-8">
        <label for="validationServer01" class="form-label">Nome Completo</label>
        <input type="text" name="nome" class="form-control" id="validationServer01" required>
    </div>
    <p></p>
    <div class="col-md-6">
        <label for="validationServer03" class="form-label">Nacionalidade</label>
        <select class="form-select" id="validationServer04" name="nacionalidade" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Selecione a nacionalidade</option>
            <option value="Afegão">Afegão</option>
            <option value="Africano do Sul">Africano do Sul</option>
            <option value="Alemão">Alemão</option>
            <option value="Argentino">Argentino</option>
            <option value="Australiano">Australiano</option>
            <option value="Brasileiro">Brasileiro</option>
            <option value="Britânico">Britânico</option>
            <option value="Canadense">Canadense</option>
            <option value="Chileno">Chileno</option>
            <option value="Chinês">Chinês</option>
            <option value="Colombiano">Colombiano</option>
            <option value="Coreano">Coreano</option>
            <option value="Cubano">Cubano</option>
            <option value="Dinamarquês">Dinamarquês</option>
            <option value="Egípcio">Egípcio</option>
            <option value="Espanhol">Espanhol</option>
            <option value="Estado-unidense">Estado-unidense</option>
            <option value="Francês">Francês</option>
            <option value="Grego">Grego</option>
            <option value="Holandês">Holandês</option>
            <option value="Indiano">Indiano</option>
            <option value="Inglês">Inglês</option>
            <option value="Irlandês">Irlandês</option>
            <option value="Italiano">Italiano</option>
            <option value="Japonês">Japonês</option>
            <option value="Mexicano">Mexicano</option>
            <option value="Norueguês">Norueguês</option>
            <option value="Paraguaio">Paraguaio</option>
            <option value="Peruano">Peruano</option>
            <option value="Polonês">Polonês</option>
            <option value="Português">Português</option>
            <option value="Russo">Russo</option>
            <option value="Sueco">Sueco</option>
            <option value="Suíço">Suíço</option>
            <option value="Turco">Turco</option>
            <option value="Ucraniano">Ucraniano</option>
            <option value="Uruguaio">Uruguaio</option>
            <option value="Venezuelano">Venezuelano</option>
        </select>
        {{-- <input type="text" name="nacionalidade" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required> --}}
    </div>
    <div class="col-12">
        <button class="btn btn-primary" name="submit" type="submit">Salvar</button>
    </div>
</form>
<br></br>
<h1>Lista de autores</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Nacionalidade</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($autors as $autor)
        <tr>
            <th scope="row">{{$autor->id}}</th>
            <td>{{$autor->nome}}</td>
            <td>{{$autor->nacionalidade}}</td>
            <td>
                <a href="{{route('autor.edit', ['id'=>$autor->id])}}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 18">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                </a>
            </td>
            <td>
                <form action="{{route('autor.destroy', ['id'=>$autor->id])}}" method="POST">
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
</div>
@endsection
