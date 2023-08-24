<?php

require 'Product.php';
require 'Cart.php';

session_start();

$cart = new Cart;
$productsInCart = $cart->getCart();

if (isset($_GET['id'])) {
  $id = strip_tags($_GET['id']);
  $cart->remove($id);
  header('Location: mycart.php');
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
    <link rel="stylesheet" href="CSS/style.css">
    <style>
          .box{
        position: absolute;
        margin-top: 25% ;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0,0,0,0.5);
        padding: 15px;
        border-radius: 15px;
        width: 30%;
        color: white;
    }
    fieldset{
        border: 3px solid dodgerblue;
           padding: 15px;
    }
legend{
    margin-bottom: 10px;
    background-color: dodgerblue;
    border: 8px solid dodgerblue;
    align-items: center;
}
    .inputbox{
        position: relative;
    }
    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }
    .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
    }
    .inputUser:focus ~.labelInput,
    .inputUser:valid ~.labelInput{
        top: -20px;
        font-size: 12px;
        color: dodgerblue;
    }
    #dataNascimento{
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }
    #submit{
        background-image: linear-gradient(to right, rgb(20,147,200), rgb(17,54,71));
        color: white; 
        padding: 15px;
        width: 100%;
        border: none;
        font-size: 15px;
        cursor: pointer;
    }
    #submit:hover{
        background-image: linear-gradient(to right, rgb(0,80,172), rgb(80,19,195));
    }
  .voltar a{
    position: absolute;
    top: 93%;
    left: 5%;
  }
  .voltar button{
    border-radius: 15px;
    border-color: black;
    background-color: dodgerblue;
    padding: 15px;
    color: white;
  }
  footer{
        position: absolute;
 top: 130%;
 width:100%;
    }
    .roger{
      margin-top:10%;
      margin-left:40%;
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
    <section class="roger">
    <ul>
    <?php if (count($productsInCart) <= 0) : ?>
      Nenhum produto no carrinho
    <?php endif; ?>

    <?php foreach ($productsInCart as $product) : ?>
      <li>
        <?php echo $product->getName(); ?><br>
        <input type="text" value="<?php echo $product->getQuantity() ?>">
        Preço: R$ <?php echo number_format($product->getPrice(), 2, ',', '.') ?>
        <a href="?id=<?php echo $product->getId(); ?>">remover</a>
      </li>
    <?php endforeach; ?>
    <li>Total: R$ <?php echo number_format($cart->getTotal(), 2, ',', '.'); ?></li>
  </ul>
  <a href="sistema.php"><button type="submit" >Comprar</button></a>
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


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>