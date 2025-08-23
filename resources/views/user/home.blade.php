@extends('user.layoutUser')
@section('title', 'home')

@section('content')
    <!-- Banner / Hero -->
    <section class="py-5 text-center bg-white shadow-sm">
        <div class="container">
            <h1 class="display-5 fw-bold">Bem-vindo à sua Biblioteca Digital</h1>
            <p class="lead mb-4">Explore um acervo completo de livros digitais gratuitos e de qualidade.</p>
            <form action="#" method="GET" class="row justify-content-center">
                <div class="col-md-6 col-sm-10">
                    <input type="text" name="q" class="form-control form-control-lg mb-2" placeholder="Buscar por título ou autor...">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Livros em Destaque -->
@endsection
