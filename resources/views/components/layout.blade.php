<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        {{ $slot }}
        <!-- Formato abaixo, faz com que o blade nao faça o parse e mande simplesmente "@{{ nome }}" para a pagina -->
        @{{nome}}
    </div>
</body>
</html>