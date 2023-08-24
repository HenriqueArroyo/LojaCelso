<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vortex</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        #vasco3{
            margin-right: 20px;
            margin-top:21px;
        }
        #vasco{
            padding: 15px;
            margin-top: 7px;
        }
        #vasco2 {
            padding: 15px;
            margin-top: 16px;
        }
        #vasco2 a {
           color: aliceblue;
        }
        #vasco2 a:hover {
           background-color: dodgerblue;
        }
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="sistema.php ">
                    <img src="/Images/Logo.png" alt="Logo" width="140" height="60"
                        class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li  class="nav-item">
                            <a class="nav-link" style="color: white;" href="loginProdutos.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li id="vasco3"  class="nav-item">
                    <a href="mycart.php"><img width="62px" height="62px" src="/Images/carrinho.png" alt=""></a>
                    </li>
                <li id="vasco" class="nav-item">
                    <a href="edit.php"><img width="62px" height="62px" src="/Images/perfil.png" alt=""></a>
                    </li>
                <li id="vasco2" class="nav-item">
                <a href="sair.php" class="btn btn-blue me-2">Sair</a>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container-carousel">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/carousel3.png" class="d-block" alt="vortex">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/carousel2.png" class="d-block" alt="frase">
                    </div>
                    <div class="carousel-item">
                        <img src="Images/carousel1.png" class="d-block" alt="frase2">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <a class="navbar-brand" href="loginProdutos.php">
            <img src="Images/OfertasNike.png" alt="Logo" width="100%" height="500"
                class="d-inline-block align-text-top">
        </a>
    </section>

    <section class="section3">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Quem somos nós?</h2>
                <p class="lead">Somos sua principal fonte de artigos esportivos, dedicados a fornecer produtos de alta
                    qualidade para atletas de todos os níveis. Nossa missão é inspirar e capacitar sua jornada
                    esportiva, oferecendo uma ampla gama de produtos, desde vestuário de alto desempenho até calçados
                    inovadores. Seja qual for seu esporte, estamos aqui para ajudá-lo a alcançar seus objetivos com
                    paixão e determinação. Nossa equipe é composta por apaixonados por esportes, entendendo
                    profundamente as necessidades e desejos de nossa comunidade. Estamos constantemente buscando as
                    últimas inovações e tendências do mundo esportivo para garantir que você tenha acesso ao que há de
                    mais avançado.</p>
            </div>
            <div class="col-md-5">
                <img src="/Images/QuemSomos.jpg" alt="quemSomos">
            </div>
        </div>

        <hr class="featurette-divider">

        </div>
        </div>
    </section>

    <section class="section4">
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1" style="color: white;">Produtos oficiais</h2>
                <p class="lead" style="color: white;">Explore a nossa incrível coleção de produtos oficiais que trazem a
                    autenticidade do seu esporte favorito até você. Desde camisas de times até equipamentos licenciados,
                    cada peça carrega consigo a paixão e a emoção do esporte de elite. Comprando os produtos oficiais,
                    você não apenas veste a marca do seu time ou atleta preferido, mas também se conecta diretamente com
                    a essência do jogo. Cada detalhe é projetado com precisão para refletir a verdadeira identidade
                    esportiva, permitindo que você viva a experiência completa do seu esporte predileto. Navegue pela
                    nossa seleção de produtos oficiais e leve para casa um pedaço genuíno do mundo esportivo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="Images/SeloConfianca.png" alt="poducts">
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1">Confiança e segurança</h2>
                <p class="lead">Sua segurança é nossa prioridade número um. Quando se trata de comprar artigos
                    esportivos de alta qualidade, queremos que você se sinta confiante e protegido. Nosso site utiliza
                    as mais avançadas medidas de segurança para garantir que suas informações pessoais e financeiras
                    estejam sempre protegidas. Além disso, trabalhamos com métodos de pagamento seguros e confiáveis,
                    para que você possa realizar suas compras com tranquilidade. Estamos comprometidos em proporcionar a
                    você uma experiência de compra segura e sem preocupações, para que possa se concentrar no que
                    realmente importa: encontrar os melhores produtos esportivos para elevar o seu desempenho e a sua
                    diversão.</p>
            </div>
            <div class="col-md-5">
                <img src="/Images/Security.png" alt="quemSomos">
            </div>
        </div>

        <hr class="featurette-divider">

        </div>
        </div>
    </section>

    <footer class="bg-black text-center text-white">

        <div class="container p-4 pb-0">

            <section class="mb-4">

                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" style="width: 40px;"
                    href="https://www.facebook.com/senailimeira/?locale=pt_BR" role="button"><i
                        class="fa fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" style="width: 40px;"
                    href="https://twitter.com/SenaiLimeira" role="button"><i class="fa fa-twitter"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" style="width: 40px;"
                    href="https://www.instagram.com/senailimeira_/" role="button"><i class="fa fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" style="width: 40px;"
                    href="https://br.linkedin.com/in/senailimeira" role="button"><i class="fa fa-linkedin"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" style="width: 40px;"
                    href="https://github.com/luigisousagh" role="button"><i class="fa fa-github"></i></a>
            </section>

        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="/home.html">VORTEX</a>
        </div>

        <!-- Copyright -->
    </footer>
</script>
</html>