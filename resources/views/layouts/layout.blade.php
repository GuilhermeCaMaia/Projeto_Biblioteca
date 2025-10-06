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
            <a class="navbar-brand" href="{{ route('user.index') }}">Biblioteca Digital</a>
            {{-- Menu sanduiche --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Início</a></li>
                    {{-- condicional para acessar paginas de admin --}}
                    @if(auth()->check() && auth()->user()->role == 'admin')
                        <li class="nav-item"><a class="nav-link" href="{{ route('autor.create') }}">Cadastrar autor</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('livro.create') }}">Cadastrar livro</a></li>
                    @endif
                    {{-- condicional para acessar paginas de usuario --}}
                    @if(auth()->check() && auth()->user()->role == 'user')
                        <li class="nav-item"><a class="nav-link" href="{{ route('catalogo.create') }}">Catálogo</a></li>
                    @endif
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button
                                type="submit"
                                class="btn btn-link nav-link text-white"
                                >
                                    logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    {{-- conteudo da pagina --}}
</body>
</html>
