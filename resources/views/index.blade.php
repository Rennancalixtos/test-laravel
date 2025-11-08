
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Posts</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">
        <h1>Bem-vindo ao sistema de consulta</h1>

        
        <div class="buttons">
            
            <a href="{{ route('nomes') }}" class="btn">Consultar Nomes</a>
            <a href="{{ route('post') }}" class="btn">Ver Posts</a>
            <a href="{{ route('ultimopt') }}" class="btn">Último Post</a>
            <a href="{{ route('consultacomfiltro') }}" class="btn">Consultar com Filtro</a>

    </div>

</body>
</html>
