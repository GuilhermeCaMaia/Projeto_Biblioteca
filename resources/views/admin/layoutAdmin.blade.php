<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">Biblioteca Digital</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Início</a></li>
                    @if(auth()->check() && auth()->user()->role == 'user')
                    <li class="nav-item"><a class="nav-link" href="#">Catálogo</a></li>
                    @endif
                    <li class="nav-item"><a class="nav-link" href="{{ route('autor.create') }}">Cadastrar autor</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('livro.create') }}">Cadastrar livro</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
<!-- Rodapé -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            © {{ date('Y') }} Biblioteca Digital. Todos os direitos reservados.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
