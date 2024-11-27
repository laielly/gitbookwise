<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livro</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://wallpapers.com/images/featured/plano-de-fundo-do-livro-xfix8ihv6dmfjzyu.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            color: #3e2723;
        }
        nav {
            background-color: rgba(62, 39, 35, 0.9); /* Marrom escuro */
            color: #efebe9;
            padding: 1rem;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav a {
            color: #efebe9;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            border: 1px solid #4e342e;
            border-radius: 10px;
            background-color: rgba(78, 52, 46, 0.85); /* Fundo marrom escuro com transparência */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }
        h1 {
            text-align: center;
            color: #d7ccc8;
            font-size: 1.8em;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 15px 0 5px;
            color: #efebe9;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #5d4037;
            border-radius: 20px; /* Bordas arredondadas */
            background-color: #6d4c41;
            color: #efebe9;
        }
        input::placeholder {
            color: #bcaaa4; /* Tom de marrom claro para o placeholder */
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #4e342e; /* Marrom escuro para o botão */
            color: #efebe9;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #3e2723;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            @if(isset($user))
                <li><a href="{{ route('profile.show', ['id' => $user->id]) }}">Perfil</a></li>
            @endif
            <li><a href="{{ route('feed') }}">Feed</a></li>
            <li><a href="{{ route('logout') }}">Sair</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Adicionar Novo Livro</h1>
        <form method="POST" action="{{ route('livros.store') }}">
            @csrf
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Exemplo: O Morro dos Ventos Uivantes" required>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" placeholder="Exemplo: Emily Brontë" required>
            <label for="editora">Editora:</label>
            <input type="text" id="editora" name="editora" placeholder="Exemplo: Editora XYZ" required>
            <label for="anoPublicacao">Ano:</label>
            <input type="number" id="anoPublicacao" name="anoPublicacao" placeholder="Exemplo: 1847" required>
            <label for="genero">Gênero:</label>
            <input type="text" id="genero" name="genero" placeholder="Exemplo: Romance Clássico" required>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" placeholder="Exemplo: Uma história sobre amor e vingança." required>
            <button type="submit">Adicionar Livro</button>
        </form>
    </div>
</body>
</html>
