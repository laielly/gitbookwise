<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bookwise - Organize seus livros">
  <meta name="keywords" content="books, reading, organization, library">
  <title>Bookwise - Organize seus livros</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
      color: #333;
    }

    /* NavBar */
    nav {
      background-color: #343a40;
      padding: 10px;
    }

    nav .navbar-brand {
      color: #fff;
      font-size: 24px;
    }

    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
    }

    nav a:hover {
      text-decoration: underline;
    }

    /* Banner */
    .banner {
      background-color: #6c757d;
      color: white;
      padding: 50px 0;
      text-align: center;
    }

    .banner h1 {
      font-size: 3em;
      margin-bottom: 10px;
    }

    .banner p {
      font-size: 1.2em;
    }

    /* Book Section */
    .book-section {
      padding: 40px 0;
    }

    .book-section h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .book-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 20px;
    }

    .book-item {
      background-color: white;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .book-item img {
      max-width: 100%;
      border-radius: 8px;
    }

    .book-item h5 {
      margin-top: 10px;
      font-size: 1em;
    }

    /* Footer */
    .footer {
      background-color: #343a40;
      color: white;
      padding: 20px 0;
      text-align: center;
      margin-top: 40px;
    }

    .footer p {
      margin: 0;
    }
  </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">Bookwise</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Livros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gêneros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Perfil</a>
        </li>
        <li class="nav-item">
        <a class="btn btn-primary" href="{{ route('login') }}">Entrar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Banner -->
<section class="banner">
  <div class="container">
    <h1>Bookwise: Organize seus livros de forma eficiente</h1>
    <p>Descubra recomendações personalizadas para suas próximas leituras.</p>
  </div>
</section>

<!-- Book Section -->
<section class="book-section">
  <div class="container">
    <h2>Últimos lançamentos</h2>
    <div class="book-grid">
      <div class="book-item">
        <img src="https://img.skoob.com.br/onLa3DWh4_cenK3modont2dFDoc=/200x/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/122430723/HOMEMARANHA_MILES_MORALES_AS_1710337156122430723SK-V11710337157B.jpg" alt="Homem-Aranha">
        <h5>Homem-Aranha</h5>
      </div>
      <div class="book-item">
        <img src="https://img.skoob.com.br/2MDXs4wWjQcD7peyzaSv6_-MTN0=/120x178/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/122399958/CAIDA_POR_VOCE_1706911231122399958SK-V11706911232B.jpg" alt="Caída por você">
        <h5>Caída por você</h5>
      </div>
      <div class="book-item">
        <img src="https://img.skoob.com.br/j_jRbEM3DH1wgQELcC6LcVD3LPk=/120x178/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/122431085/VIDA_1710425134122431085SK-V11710425135B.jpg" alt="Vida">
        <h5>Vida</h5>
      </div>
      <div class="book-item">
        <img src="https://img.skoob.s3.amazonaws.com/livros/564/O_FANTASMA_DA_PERA_119414909B.jpg" alt="O Fantasma da Ópera">
        <h5>O Fantasma da Ópera</h5>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <p>&copy; 2024 Bookwise. Todos os direitos reservados.</p>
  </div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
