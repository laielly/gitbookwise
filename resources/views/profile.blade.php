<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | AdminKit Demo</title>
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
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* Main content container */
        .main {
            max-width: 800px;
            width: 90%;
            background: #fff7f3;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            text-align: center;
            flex-grow: 1;
            margin-top: 2rem;
        }

        h1 {
            color: #5e3d32;
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        /* Profile details card */
        .profile-card {
            background: #f5ebe0;
            border-radius: 10px;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .profile-card img {
            width: 150px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 0.8rem;
        }

        .profile-card h3 {
            font-size: 1.2rem;
            color: #4a2d23;
            margin: 0.5rem 0;
            font-weight: 600;
        }

        .profile-card p {
            color: #4a2d23;
        }

        .profile-card button {
            background-color: #8b5a3c;
            color: #f4e1d2;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-card button:hover {
            background-color: #a66d4f;
        }

        /* Navigation Bar */
        nav {
            background-color: #8b5a3c;
            padding: 1rem 2rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            width: 100%;
            text-align: center;
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

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff7f3;
            padding: 2rem;
            border-radius: 10px;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        .modal-content h2 {
            color: #5e3d32;
        }

        .modal-content .form-group {
            margin-bottom: 1rem;
        }

        .modal-content label {
            display: block;
            margin-bottom: 0.5rem;
            color: #4a2d23;
        }

        .modal-content input {
            width: 100%;
            padding: 0.5rem;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .modal-content button {
            background-color: #8b5a3c;
            color: #f4e1d2;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 1rem;
        }

        .modal-content button:hover {
            background-color: #a66d4f;
        }

        .close-btn {
            background-color: #d9534f;
            color: #f4e1d2;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('feed')}}">Feed</a></li>
            <li><a href="{{route('addbook')}}">Adicionar Livro</a></li>
            <li><a href="{{route('estante')}}">Estante</a></li>
        </ul>
    </nav>

    <div class="main">
        <h1>Perfil</h1>
        <div class="profile-card">
            <img src="{{ auth()->user()->profile_picture ?? 'https://via.placeholder.com/150' }}" alt="Imagem de Perfil">
            <h3>{{ auth()->user()->name }}</h3>
            <p>{{ auth()->user()->email }}</p>
            <button onclick="openModal()">Editar Perfil</button>
        </div>

    </div>

   <!-- Modal for editing profile -->
<div id="editProfileModal" class="modal">
    <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="modal-content">
            <h2>Editar Perfil</h2>
            <div class="form-group">
                <label for="editName">Nome</label>
                <input type="text" name="name" id="editName" value="{{ Auth::user()->name }}" required>
            </div>
            <div class="form-group">
                <label for="editEmail">Email</label>
                <input type="email" name="email" id="editEmail" value="{{ Auth::user()->email }}" required>
            </div>
            <div class="form-group">
                <label for="editPassword">Senha (deixe em branco para manter a mesma)</label>
                <input type="password" name="password" id="editPassword">
            </div>
            <div class="form-group">
                <label for="editPasswordConfirmation">Confirme a Senha</label>
                <input type="password" name="password_confirmation" id="editPasswordConfirmation">
            </div>
            <button type="submit">Salvar Alterações</button>
            <button type="button" class="close-btn" onclick="closeModal()">Cancelar</button>
        </div>
    </form>
</div>


    <script>
        function openModal() {
            document.getElementById("editProfileModal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("editProfileModal").style.display = "none";
        }
    </script>
</body>
</html>
