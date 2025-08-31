@extends('layouts.layout')
@section('title', 'Editar Autor')

@section('content')
<div class="container">
    <h1>Editar autor</h1>
    <form action="{{ route('autor.update', ['id'=>$autors->id])}}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-4">
            <label for="validationServer01" class="form-label">Nome Completo</label>
            <input type="text" name="nome" value="{{$autors->nome}}" class="form-control" id="validationServer01" required>
        </div>
        <p></p>
        <div class="col-md-6">
            <label for="validationServer03" class="form-label">Nacionalidade</label>
            <select class="form-select" id="validationServer04" name="nacionalidade" aria-describedby="validationServer04Feedback" required>
                <option selected disabled value=""
                    {{ (isset($autors) && $autors->nacionalidade == '') ? 'selected' : '' }}>
                    {{$autors->nacionalidade}}
                </option>
                <option value="Afegão">Afegão</option>
                <option value="Africano do Sul">Africano do Sul</option>
                <option value="Alemão">Alemão</option>
                <option value="Argentino">Argentino</option>
                <option value="Australiano">Australiano</option>
                <option value="Brasileiro">Brasileiro</option>
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
            </select>
            {{-- <input type="text" name="nacionalidade" value="{{$autors->nacionalidade}}" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" required> --}}
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Editar</button>
        </div>
    </form>
</div>
@endsection
