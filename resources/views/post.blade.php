<div>
    <!-- He who is contented is rich. - Laozi -->



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


</div>
