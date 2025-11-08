@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="consulta-container">
    <h1 class="consulta-title">Lista de Posts</h1>

    <div class="container">
        @foreach ($posts_users as $post)
            <div class="post-item">
                <div class="post-header">
                    <h3>{{ $post->titulo }}</h3>
                    <span class="post-badge">Post</span>
                </div>
                <p class="post-text">{{ Str::limit($post->conteudo, 150) }}...</p>
                <div class="post-info">
                    <small><strong>Autor:</strong> {{ $post->user->name ?? 'Desconhecido' }}</small>
                    <small><strong>Criado em:</strong> {{ $post->created_at->format('d/m/Y H:i') }}</small>
                </div>

            </div>
        @endforeach
    </div>
</div>
