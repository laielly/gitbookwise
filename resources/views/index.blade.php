<!DOCTYPE html>
<!-- saved from url=(0101)file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Required meta tags -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Influencer- Book landing template">
  <meta name="keywords" content="Influencer,creative, agency, startup,onepage, clean, modern,business, company,it">

  <meta name="author" content="themefisher.com">

  <!-- theme meta -->
  <meta name="theme-name" content="influencer">

  <title>Influencer-
     Landing Template</title>

 <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/images/favicon.ico">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="./Influencer- Landing Template_files/bootstrap.min.css">
  <!-- Animate Css -->
  <link rel="stylesheet" href="./Influencer- Landing Template_files/animate.css">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="./Influencer- Landing Template_files/themify-icons.css">
  <link rel="stylesheet" href="./Influencer- Landing Template_files/magnific-popup.css">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="./Influencer- Landing Template_files/slick.css">
  <link rel="stylesheet" href="./Influencer- Landing Template_files/slick-theme.css">
  <link rel="stylesheet" href="./Influencer- Landing Template_files/owl.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="./Influencer- Landing Template_files/style.css">


<style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f5f5f5;
    color: #4e3b31; /* Cor marrom escuro */
}

h1, h2, h3 {
    color: #3b2a24; /* Cor marrom mais escuro */
}

.container {
    max-width: 800px;
    margin: auto;
    padding: 20px;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

nav {
    background-color: #6f4c3e; /* Cor marrom */
    padding: 10px;
    border-radius: 5px;
    text-align: center;
}

nav a {
    color: white;
    margin: 0 15px;
    text-decoration: none;
    font-weight: bold;
}

nav a:hover {
    text-decoration: underline;
}

button {
    background-color: #7c4a42; /* Cor marrom claro */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
}

button:hover {
    background-color: #8b5a4b; /* Cor marrom mais claro ao passar o mouse */
}

.card {
    background-color: #f0e5e0; /* Fundo claro para os cartões */
    padding: 15px;
    margin: 10px 0;
    border-radius: 5px;
}

.card-title {
    font-weight: bold;
    color: #3b2a24; /* Cor marrom mais escuro para o título do cartão */
}

.footer {
    text-align: center;
    padding: 20px;
    font-size: 0.8em;
    color: #7f8c8d; /* Cor neutra para o rodapé */
}
.btn {
    background-color: #7c4a42; /* Cor marrom claro */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px; /* Aumenta a área clicável */
    font-weight: bold; /* Destaca o texto */
    cursor: pointer;
    transition: background-color 0.3s ease; /* Transição suave ao passar o mouse */
    margin: 5px; /* Espaçamento entre os botões */
}

.btn:hover {
    background-color: #8b5a4b; /* Cor marrom mais claro ao passar o mouse */
}

.search {
    display: flex;
    align-items: center; /* Centraliza verticalmente */
}

input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px; /* Espaço entre o input e o botão */
    flex: 1; /* Faz o input ocupar o espaço disponível */
}


</style>

</head>


<body id="top-header">
<!-- Navigation Menu -->

    <!-- NAVBAR
    ================================================= -->
    <div classs ="main-navigation fixed-top site-header" id="mainmenu-area">
        <nav class="navbar navbar-expand-lg ">
            <div class="container align-items-center">
                <a class="navbar-brand" href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html">
                    <h2 class="mb-0">Book<span class="text-color"></span>wise</h2>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu-alt"></span>
                </button>


                <form action="/search" method="GET" style="display: flex; align-items: center;">
                    <input type="text" name="q" placeholder="Busque por título, autor..." style="padding: 8px; border: 1px solid #ccc; border-radius: 4px; margin-right: 5px; font-size: 16px; width: 300px;">
                    <button type="submit" style="background-color: #a06439; color: white; padding: 8px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Pesquisar</button>
                  </form>

                <!-- Collapse -->

                            <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                                 <a class="dropdown-item " href="{{ route('blog-single') }}">
                                    Blog
                                </a>
                                <a class="dropdown-item " href="{{ route('blog-single') }}">
                                    Blog Single
                                </a>
                                {{-- <a class="dropdown-item " href="{{ route('checkout') }}">
                                    Purchase
                                </a>
                                <a class="dropdown-item " href="{{ route('confirmation') }}">
                                    Confirmation
                                </a>--}}
                            </div>
                        </li>
                    </ul>
                    <a href="{{ route('login') }}" class="btn btn-border-tp btn-small ml-3" style="background-color: #a06439; color: white;">Entrar</a>
                    <a href="{{ route('register') }}" class="btn btn-border-tp btn-small ml-3" style="background-color: #a06439; color: white;">Cadastrar</a>


                </div>
            </div>
        </nav>
    </div>

<!-- Banner -->
<section class="banner-main py-7" id="banner">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 col-md-8">
                <div class="main-banner">

                    <h1 class="mb-3 mt-2">
                        Bookwise: organize seus livros de   <br>forma eficiente
                    </h1>


                    <p class="mb-4"> </p><p>Escolhendo o que ler a seguir?</p>

                        Você veio ao lugar certo. Conte-nos quais títulos ou gêneros você gostou no passado, e nós lhe daremos recomendações surpreendentemente perspicazes.<p></p>


                    </a>
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-block">
                <div class="banner-img pt-5">
                    <img src="./Influencer- Landing Template_files/o-conceito-de-ler-as-pessoas-do-dia-segura-um-livro_250257-2889.jpg" alt="" class="img-fluid w-70">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Awards -->
<section id="clients-logo-section" class="section-top">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="section-heading text-center">
            <h2 class="text-lg">Últimos lançamentos!</h2>
          </div>
      </div>
    </div>

    <div class="row">
      < <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section-heading text-center">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="book-item mb-4 mb-lg-0">
                <img src="https://img.skoob.com.br/onLa3DWh4_cenK3modont2dFDoc=/200x/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/122430723/HOMEMARANHA_MILES_MORALES_AS_1710337156122430723SK-V11710337157B.jpg" alt="" class="img-fluid">
                <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#" class="hover-item">
                    <i class="ti-link"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="book-item mb-4 mb-lg-0">
                <img src="https://img.skoob.com.br/2MDXs4wWjQcD7peyzaSv6_-MTN0=/120x178/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/122399958/CAIDA_POR_VOCE_1706911231122399958SK-V11706911232B.jpg" alt="" class="img-fluid">
                <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#" class="hover-item">
                    <i class="ti-link"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="book-item mb-4 mb-lg-0">
                <img src="https://img.skoob.com.br/j_jRbEM3DH1wgQELcC6LcVD3LPk=/120x178/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/122431085/VIDA_1710425134122431085SK-V11710425135B.jpg" alt="" class="img-fluid">
                <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#" class="hover-item">
                    <i class="ti-link"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="book-item mb-4 mb-lg-0">
                <img src="https://img.skoob.com.br/IjDxR09wBYOYyhCNW7NtVAJg_RU=/200x/center/top/smart/filters:format(jpeg)/https://skoob.s3.amazonaws.com/livros/564/O_FANTASMA_DA_PERA_119414909B.jpg" alt="" class="img-fluid">
                <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#" class="hover-item">
                    <i class="ti-link"></i>
                </a>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- Others books -->
<section class="section others-book">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-lg">Livros em destaque</h2>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="https://www.portaldaliteratura.com/assets/files_livros/11125.webp" alt="" class="img-fluid">
                    <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="https://www.portaldaliteratura.com/assets/files_livros/11415.webp" alt="" class="img-fluid">
                    <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="https://www.portaldaliteratura.com/assets/files_livros/11083.webp" alt="" class="img-fluid">
                    <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="https://www.portaldaliteratura.com/assets/files_livros/11382.webp" alt="" class="img-fluid">
                    <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Latest blog -->
<section class="section blog-home border-top" id="blog">
    <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-lg mb-3">Explore  nossas funcionalidades  </h2>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-item card mb-4 mb-lg-0 border-0">
                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS4nv_lcpbZVyw3cozgrCGz3g2bpICucbQv8WWvVw96eOuum0gj" alt="" class="img-fluid w-100">
                    <div class="blog-item-content p-4">
                        <div class="blog-meta mb-2">

                            <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#"></a>
                        </div>
                        <h4 class="mt-2 mb-3"><a href="{{ route('estante') }}">Escreva uma resenha e avalie sua leitura </a></h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-item card mb-4 mb-lg-0 border-0">
                    <img src="./Influencer- Landing Template_files/blog3.jpg" alt="" class="img-fluid w-100">
                    <div class="blog-item-content p-4">
                        <div class="blog-meta mb-2">

                            <a href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#"></a>
                        </div>

                        <h4 class="mt-2 mb-3"><a href="{{ route('estante') }}">Marque os livros já lidos</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Cpntact -->
<section class="section contact bg-grey" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
               <div class="section-heading text-center">
                <h1>Quem somos?!</h1>

                    <p>Somos uma comunidade apaixonada pela leitura, dedicada a conectar amantes de livros em todo o Brasil. Junte-se a milhares de leitores e faça parte dessa jornada literária conosco, compartilhando experiências e descobrindo novos horizontes na vasta paisagem dos livros.</p>
               </div>
            </div>
        </div> <!-- / .row -->

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-block text-center mb-4">
                    <i class="ti-headphone-alt"></i>
                    <p class="mb-0">Contact Quickly</p>
                    <h5>+23-68017684</h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-block text-center mb-4">
                    <i class="ti-email"></i>
                    <p class="mb-0">Email</p>
                    <h5>startor@support.com</h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-block text-center mb-4">
                    <i class="ti-location-pin"></i>
                    <p class="mb-0">Location</p>
                    <h5>397 Lake forest drive street USA</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div id="map" ></div> --



<!--  Page Scroll to Top  -->

<a class="scroll-to-top smoth-scroll" href="file:///C:/Users/laiel/Downloads/influencer-bootstrap-main/influencer-bootstrap-main/theme/index.html#top-header">
    <i class="ti-angle-up"></i>
</a>





    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="./Influencer- Landing Template_files/jquery.min.js.download"></script>
    <!-- Bootstrap 3.1 -->
    <script src="./Influencer- Landing Template_files/popper.min.js.download"></script>
    <script src="./Influencer- Landing Template_files/bootstrap.min.js.download"></script>
    <script src="./Influencer- Landing Template_files/owl-carousel.js.download"></script>
    <!-- Slick Slider -->
    <script src="./Influencer- Landing Template_files/slick.min.js.download"></script>
    <script src="./Influencer- Landing Template_files/jquery.magnific-popup.js.download"></script>
    <script src="./Influencer- Landing Template_files/theme.js.download"></script>




</body>
</html>
