<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Book Feed | BookWise</title>

    <link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f6e4d7;
            color: #5d4037;
            margin: 0;
            padding: 0;
            display: flex;
            overflow: hidden; /* Impede rolagem desnecessária */
        }

        .wrapper {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        .sidebar {
            background-color: #8a5635;
            width: 250px;
            padding: 20px;
            color: #ffffff;
        }

        .sidebar h2 {
            margin: 0 0 20px;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            display: block;
            padding: 10px;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            padding: 20px;
            overflow-y: auto; /* Permite rolagem no conteúdo */
        }

        .feed-title {
            text-align: center;
            color: #8a5635;
            font-weight: 600;
            margin: 0;
        }

        .add-post-button {
            margin: 20px 0;
            display: flex;
            justify-content: center;
        }

        .btn-primary {
            background-color: #8a5635;
            border: none;
            color: #ffffff;
            font-size: 18px;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s; /* Adiciona transição suave */
        }

        .btn-primary:hover {
            background-color: #73472a;
        }

        .card {
            background-color: #f6e4d7;
            border-radius: 12px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            padding: 15px;
            width: 100%;
            max-width: 600px;
        }

        .card-footer button {
            background: none;
            border: none;
            color: #8a5635;
            font-size: 16px;
            cursor: pointer;
            margin-right: 10px;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            width: 300px;
            z-index: 1000;
        }

        .popup textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            resize: none;
        }

        .popup .btn-close,
        .popup .btn-submit {
            background-color: #8a5635;
            border: none;
            color: #ffffff;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
            margin-top: 10px;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>BookWise</h2>
            <a href="{{ route('index') }}">Sair</a>
            <a href="{{ route('profile') }}">Perfil</a>
        </div>

        <div class="content-wrapper">
            <h1 class="feed-title">Feed de Leitura</h1>

            <!-- Campo de pesquisa -->
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Pesquisar..." required>
                <button type="submit" class="btn-primary">Buscar</button>
            </form>

            <div class="add-post-button">
                <a href="{{ route('estante') }}" class="btn-primary">Adicionar Novo Post</a>
            </div>

            <!-- Feed Content -->
            @if($posts->count() > 0)
                @foreach ($posts as $post)
                    <div class="card">
                        <h5>{{ $post->title ?? 'Título não disponível' }}</h5>
                        <p>{{ $post->content ?? 'Conteúdo não disponível' }}</p>
                        <div class="card-footer">
                            <button class="comment-btn" onclick="togglePopup({{ $post->id }})"><i data-feather="message-circle"></i> Comentar</button>
                            <button class="like-btn" onclick="toggleLike(this)"><i data-feather="thumbs-up"></i> Curtir</button>
                        </div>
                        <div class="comments">
                            <h6>Comentários:</h6>
                            <ul id="commentList{{ $post->id }}"></ul>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Nenhum post encontrado.</p>
            @endif
        </div>

        <!-- Popup para comentários -->
        <div class="overlay" id="overlay" onclick="togglePopup()"></div>
        <div class="popup" id="popup">
            <h4>Comentar</h4>
            <textarea id="commentText" rows="3" placeholder="Escreva seu comentário..."></textarea>
            <button class="btn-submit" onclick="submitComment()">Enviar</button>
            <button class="btn-close" onclick="togglePopup()">Fechar</button>
        </div>
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();

        let currentPostId;

        function toggleLike(button) {
            button.classList.toggle('active');
            button.innerText = button.classList.contains('active') ? 'Descurtir' : 'Curtir';
        }

        function togglePopup(postId) {
            currentPostId = postId; 
            const overlay = document.getElementById('overlay');
            const popup = document.getElementById('popup');
            const display = overlay.style.display === 'block' ? 'none' : 'block';
            overlay.style.display = display;
            popup.style.display = display;
            if (display === 'block') {
                document.getElementById('commentText').focus(); // Foca no campo de texto ao abrir o popup
            }
        }

        function submitComment() {
            const commentText = document.getElementById('commentText').value;
            if (commentText) {
                const commentList = document.getElementById(`commentList${currentPostId}`);
                const li = document.createElement('li');
                li.innerText = commentText;
                commentList.appendChild(li);
                document.getElementById('commentText').value = ''; 
                togglePopup(); 
            }
        }
    </script>
</body>
</html>
