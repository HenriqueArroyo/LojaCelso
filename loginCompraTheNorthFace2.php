<?php

require 'Cart.php';
require 'Product.php';

session_start();

$products = [
  1 => ['id' => 1, 'name' => 'Jaqueta Masculina Antora Cinza', 'price' => 999.90, 'quantity' => 1],
];


if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $productInfo = $products[$id];
  $product = new Product;
  $product->setId($productInfo['id']);
  $product->setName($productInfo['name']);
  $product->setPrice($productInfo['price']);
  $product->setQuantity($productInfo['quantity']);

  $cart = new Cart;
  $cart->add($product);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vortex.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/stylecmpras.css">
    <style>
        footer {
            position: absolute;
            top: 150%;
            width: 100%;
        }
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
           background-color: dodgerblue;
        }
        #vasco2 a:hover {
           background-color: dodgerblue;
        }
    </style>
</head>


<body>
<header>
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
        <div class="box">
            <div style="height: 750px; width: 700px;" id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/Images/Antora1.png" width="100000px" height="750px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/Images/Antora2.png" width="100000px" height="750px" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/Images/Antora3.png" width="100000px" height="750px" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="pinto">
                <h2>
                    Jaqueta Masculina Antora Cinza
                </h2>
                <p id="hahaha">
                    Feita 100% de materiais reciclados, a Jaqueta Antora possui uma silhueta moderna com a proteção que
                    você precisa na sua próxima aventura. Com costuras seladas e tecido com tecnologia DryVent™ 2L e
                    acabamento resistente à água (DWR), essa jaqueta masculina oferece proteção impermeável e corta
                    vento.
                </p>
                <hr>
                <h1>R$ 999,90 </h1>
                <section class="hehehe">
                    <h2>Tamanhos</h2>
                    <button id="pau" type="submit">PP</button>
                    <button style="margin-left:52%;" id="pau" type="submit">P</button>
                    <button style="margin-left:58%;" id="pau" type="submit">M</button>
                    <button style="margin-left:64%;" id="pau" type="submit">G</button>
                    <button style="margin-left:70%;" id="pau" type="submit">GG</button>
                </section>
                <a href=""><button id="b1" style="height:50px; color: black; background-color: white; margin-left: 46%; margin-top: 20%; width: 50%;" type="submit">Comprar</button></a>
                <a href="?id=1"><button value="Adicionar ao Carrinho" type="submit" style="height:50px; color: white; background-color: black; margin-left: 46%; margin-top: 1%; width: 50%;">Adicionar ao Carrinho</button></a>
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
            <a class="text-white" href="/home.php">VORTEX</a>
        </div>

        <!-- Copyright -->
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>