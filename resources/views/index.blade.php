
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






