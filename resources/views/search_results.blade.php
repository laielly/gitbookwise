<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
    <title>Resultados da Pesquisa</title>
</head>
<body>
    <h1>Resultados da Pesquisa</h1>

    @if($posts->isEmpty())
        <p>Nenhum resultado encontrado para sua pesquisa.</p>
    @else
        @foreach($posts as $post)
            <div class="card">
                <h5>{{ $post->title }}</h5>
                <p>{{ $post->content }}</p>
            </div>
        @endforeach
    @endif
</body>
</html>
