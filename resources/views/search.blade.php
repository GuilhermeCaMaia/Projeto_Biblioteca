<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Busca de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .search-box {
            width: 50%;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="search-box text-center">
        <h1 class="mb-4">Biblioteca Digital</h1>
        <form action="{{ route('livros.search') }}" method="GET" class="d-flex mb-4">
            <input type="text" name="q" class="form-control me-2" placeholder="Digite o nome do livro..." value="{{ request('q') }}">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        @if(isset($livros))
            <div class="mt-4 text-start">
                @if($livros->isEmpty())
                    <p>Nenhum livro encontrado para "<strong>{{ request('q') }}</strong>".</p>
                @else
                    <p>Resultados para "<strong>{{ request('q') }}</strong>":</p>
                    @foreach($livros as $livro)
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5 class="card-title">{{ $livro->nome }}</h5>
                                <p class="card-text">Autor: {{ $livro->autor->nome ?? 'Desconhecido' }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @endif
    </div>
</body>
</html>
