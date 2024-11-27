<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Estante Virtual</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* Body Settings */
        body {
            font-family: 'Merriweather', serif;
            background-color: #f4e1d2;
            color: #4a2d23;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Navigation Bar */
        nav {
            background-color: #8b5a3c;
            padding: 1rem 2rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
            gap: 1.5rem;
        }

        nav ul li a {
            color: #f4e1d2;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #a66d4f;
        }

        /* Container for main content */
        .container {
            max-width: 800px;
            width: 90%;
            background: #fff7f3;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        h1 {
            text-align: center;
            color: #5e3d32;
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .shelf {
            margin-top: 2rem;
        }

        .shelf h2 {
            color: #8b5a3c;
            font-weight: 600;
            font-size: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #d1a384;
            margin-bottom: 1rem;
        }

        /* Book cards */
        .bookshelf {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: space-evenly;
        }

        .book {
            background: #f5ebe0;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            width: 160px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        .book:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .book img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 0.8rem;
        }

        .book h3 {
            font-size: 1.1rem;
            color: #4a2d23;
            margin: 0.5rem 0;
            font-weight: 600;
        }

        .book button {
            background-color: #8b5a3c;
            color: #f4e1d2;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .book button:hover {
            background-color: #a66d4f;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('profile')}}">Perfil</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>Minha Estante Virtual</h1>

        <div class="shelf">
            <h2>Já Li</h2>
            <div class="bookshelf" id="ja-li">
                @forelse ($leituras as $leitura)
                <div class="book">
                    <img src="{{ $leitura->livro->capa ?? 'https://via.placeholder.com/150' }}" alt="Capa do Livro {{ $leitura->livro->titulo }}">
                    <h3>{{ $leitura->livro->titulo }}</h3>
                    <button type="button" onclick="location.href='{{ route('avaliar', ['leitura_id' => $leitura->id]) }}'">Avaliar</button>
                </div>
            @empty
                <p>Nenhuma leitura finalizada encontrada.</p>
            @endforelse

            </div>
        </div>


        <div class ="shelf">
            <h2>Lendo</h2>
            <div class="bookshelf" id="lendo">
            </div>
        </div>

        <div class="shelf">
            <h2>Quero Ler</h2>
            <div class="bookshelf" id="quero-ler">
                <form method="POST" action="{{ route('buscarLivros') }}">
                    @csrf
                    <div class="input-container">
                        <input type="text" name="titulo" id="livro-input" placeholder="Digite o título do livro...">
                        <button type="submit">Buscar/ Ver todos</button>
                    </div>
                    <div id="lista-quero-ler">
                        @if(isset($livros) && $livros->count() > 0)
                            @foreach($livros as $livro)
                                <div class="book">
                                    <img src="{{ $livro->capa ?? 'https://via.placeholder.com/150' }}" alt="Capa do Livro {{ $livro->titulo }}">
                                    <h3>{{ $livro->titulo }}</h3>
                                    {{-- <button onclick="location.href='{{ route('comentarios', ['livro_id' => $livro->id]) }}'">Adicionar Comentário</button> --}}
                                    <button type="button" onclick="registrarLeitura({{ $livro->id }})">Já li</button>
                                    <p></p>
                                    <button>Atualizar leitura</button>
                                </div>
                            @endforeach
                        @else
                            <p>Nenhum livro encontrado.</p>
                        @endif
                    </div>
                </form>
            </div>


        </div>
    </div>

    <script>
        function adicionarLivro() {
            var livroNome = document.getElementById('livro-input').value;
            if (livroNome) {
                var lista = document.getElementById('lista-quero-ler');
                var livroDiv = document.createElement('div');
                livroDiv.className = 'book';
                livroDiv.innerHTML = `<h3>${livroNome}</h3>
                                     <button onclick="removerLivro(this)">Remover</button>`;
                lista.appendChild(livroDiv);
                document.getElementById('livro-input').value = ''; // Limpa o campo de entrada
            }
        }

        function removerLivro(button) {
            var livroDiv = button.parentElement;
            livroDiv.remove(); // Remove o livro da lista
        }

        function registrarLeitura(livroId) {
    fetch("{{ route('leituras.store') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({
            livro_id: livroId
        })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro ao registrar leitura.');
        }
        return response.json();
    })
    .then(data => {
        if (data.message) {
            alert(data.message);
            // Atualiza a página ou faz outra ação, se necessário
        }
    })
    .catch(error => {
        console.error("Erro ao registrar leitura:", error);
        alert("Não foi possível registrar a leitura. Por favor, tente novamente.");
    });
}


    </script>
</body>
</html>
