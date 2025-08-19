{{-- para herdar os layouts que vem do app --}}
{{-- @extends('layouts.app')
@section('title', 'Home Page') --}}

{{-- para definir o conteúdo da página --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Biblioteca Digital')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Biblioteca Digital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>


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
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Livros em Destaque</h2>
            <div class="row g-4">
                {{-- @foreach ($livros as $livro)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">{{ $livro->titulo }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $livro->autor }}</h6>
                                <p class="card-text text-truncate">{{ $livro->descricao }}</p>
                                <a href="#" class="card-link text-primary">Ver mais</a>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </section>

<!-- Rodapé -->
    <footer class="bg-gray-200 text-center py-6 mt-12 text-gray-600">
        © {{ date('Y') }} Biblioteca Digital. Todos os direitos reservados.
    </footer>

</body>
</html>
{{-- @endsection --}}
