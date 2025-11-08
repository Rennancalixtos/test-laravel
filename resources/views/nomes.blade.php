@vite(['resources/sass/app.scss', 'resources/js/app.js'])


<div class="consulta-container">
    <div class="consulta-wrapper">
        <h2 class="consulta-title">Consulta de Nomes</h2>
        
        <div class="consulta-stats">
            <span class="consulta-count">{{ count($consultanome) }} resultado(s) encontrado(s)</span>
        </div>

        <div class="consulta-list">
            @foreach($consultanome as $index => $nome)
                <div class="consulta-item">
                    <span class="consulta-number">{{ $index + 1 }}</span>
                    <span class="consulta-nome">{{ $nome }}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
