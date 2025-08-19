<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca Digital</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Navbar -->
    <header class="bg-blue-600 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Biblioteca Digital</h1>
            <nav class="space-x-4">
                <a href="#" class="hover:underline">Início</a>
                <a href="#" class="hover:underline">Catálogo</a>
                <a href="#" class="hover:underline">login</a>
                <a href="#" class="hover:underline">Cadastro</a>
            </nav>
        </div>
    </header>
    
    <!-- Rodapé -->
    <footer class="bg-gray-200 text-center py-6 mt-12 text-gray-600">
        © {{ date('Y') }} Biblioteca Digital. Todos os direitos reservados.
    </footer>

</body>
</html>
