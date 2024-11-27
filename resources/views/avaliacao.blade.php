<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do Livro</title>
    <link rel="stylesheet" href="{{asset('styles.css')}}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('profile')}}">Perfil</a></li>
            <li><a href="{{route('addbook')}}">Adicionar Livro</a></li>
            <li><a href="{{route('estante')}}">Minha Estante</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Avaliação do Livro</h1>
        <form method="POST" action="{{ route('avaliacao.store') }}">
            @csrf
            <input type="hidden" name="leitura_id" value="{{ $leitura->id }}"> <!-- Corrigido para leitura_id -->
            <label for="rating">Avaliação (1 a 5):</label>
            <input type="number" id="rating" name="avaliacao" min="1" max="5" required>

            <label for="review">Comentário:</label>
            <textarea id="review" name="comentario" rows="4" required></textarea>

            <button type="submit">Enviar Avaliação</button>
        </form>
    </div>
</body>
</html>
