@extends('layouts.layout')

@section('title', 'Catálogo de Livros')

@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach($livros as $livro)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $livro->titulo }}</h5>
                        <h6 class="card-subtitle text-muted mb-2">Autor: {{ $livro->autor->nome }}</h6>
                        <p class="card-text">{{ Str::limit($livro->sinopse, 100) }}</p>
                        <p class="text-muted"><small>Lançamento: {{ $livro->data_lancamento }}</small></p>
                        <a href="" class="btn btn-primary btn-sm">Ver detalhes</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
