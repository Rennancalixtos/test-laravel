

@vite(['resources/sass/app.scss', 'resources/js/app.js'])
 <div class="container">
    <h1>Último Post</h1>

    <div class="post-detail-card">
        <div class="post-user-header">
            <div class="user-avatar">
                <span>{{ substr($recuperar_ultimo_post->user->name, 0, 1) }}</span>
            </div>
            <div class="user-info">
                <h3>{{ $recuperar_ultimo_post->user->name }}</h3>
                <span class="user-email">{{ $recuperar_ultimo_post->user->email }}</span>
            </div>
        </div>

        <div class="post-content-section">
            <div class="post-badge">Último Post</div>
            <h2 class="post-title">{{ $recuperar_ultimo_post->title ?? 'Sem título' }}</h2>
            <p class="post-body">{{ $recuperar_ultimo_post->body ?? $recuperar_ultimo_post->content ?? 'Sem conteúdo' }}</p>
        </div>

        <div class="post-meta">
            <span class="meta-item">
                <strong>Criado em:</strong> {{ $recuperar_ultimo_post->created_at->format('d/m/Y H:i') }}
            </span>
            @if($recuperar_ultimo_post->updated_at != $recuperar_ultimo_post->created_at)
                <span class="meta-item">
                    <strong>Atualizado em:</strong> {{ $recuperar_ultimo_post->updated_at->format('d/m/Y H:i') }}
                </span>
            @endif
        </div>
    </div>
</div>
