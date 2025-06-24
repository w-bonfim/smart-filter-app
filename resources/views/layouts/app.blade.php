<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Filtro de Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto mt-10 p-4 bg-white rounded shadow">
        {{ $slot }}
        @livewireScripts
    </div>
</body>
</html>
