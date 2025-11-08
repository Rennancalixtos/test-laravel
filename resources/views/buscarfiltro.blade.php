@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<div class="posts-list">
    @forelse ($user as $post)
        <div class="post-item">
            <div class="post-header">
                <h3>{{ $post['titulo'] ?? 'Sem título' }}</h3>
                <span class="post-badge">#{{ $post['id'] ?? '' }}</span>
            </div>
            <p class="post-text">{{ $post['conteudo'] ?? 'Sem conteúdo' }}</p>
            <div class="post-info">
                <span>Usuário: {{ $post['user_id'] ?? 'N/A' }}</span>
                <span>{{ isset($post['created_at']) ? date('d/m/Y H:i', strtotime($post['created_at'])) : 'N/A' }}</span>
            </div>
        </div>
    @empty
        <p class="empty">Nenhum post encontrado</p>
    @endforelse
</div>
