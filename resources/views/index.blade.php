<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
</head>
<body>

@if(isset($consultanome) && count($consultanome) > 0)
    <h2>Lista de Nomes</h2>
    <ul>
        @foreach($consultanome as $nome)
            <li>{{ $nome }} </li>
        @endforeach
    </ul>
@elseif(isset($consultanome))
    <p>Nenhum nome encontrado.</p>
@endif


@foreach ($consulta as $user)
    <li>ID: {{ $user->id }} |---| NOME: {{ $user->name }} |---| EMAIL: {{ $user->email }}</li>
    
@endforeach






</body>
</html>




<!DOCTYPE html>
<html>
<head>
    <title>Lista de Posts</title>
</head>
<body>
    <h1>Posts</h1>

    @foreach ($posts_users as $post)
        <div style="margin-bottom: 20px; border-bottom: 1px solid #ccc;">
            <h2>{{ $post->titulo }}</h2>
            <p>{{ $post->conteudo }}</p>
            <p><strong>Autor:</strong> {{ $post->user->name ?? 'Desconhecido' }}</p>
            <small>Criado em: {{ $post->created_at }}</small>
        </div>
    @endforeach
</body>
</html>