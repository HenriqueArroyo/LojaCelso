<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vortex.com</title> 
    <link rel="stylesheet" href="/CSS/Style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
        <style>
            .card a{
             background-color: #5a849f;
         color:white;
            }
            .card a:hover{
                background-color: #000; 
           

            } 
            .cards1 { 
            margin:40px;
            }
            .cards2 {
              margin:40px;
            }
            .cards3 { 
            margin:40px;
            }
        </style>
</head>
<body class="produtosBody">
    <header>
        <nav class="navbar navbar-expand-lg bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="Home.php ">
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
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="Home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="signIn" style="color: white;" href="#">Entrar</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="signUp" style="color: white;" href="#">Inscrever-se</a>
                </li>
            </ul>
        </nav>
    </header>
    <center>
        <section class="textoTitulo">
            <h1>Produtos</h1>
        </section>
    </center>
    <section class="cards1">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="Images/TNF.png" class="card-img-top" alt="TNF">
                    <div class="card-body">
                        <h5 class="card-title">Jaqueta Masculina Antora Cinza</h5>
                        <p class="card-text">R$ 999,90</p>
                    </div>
                    <a href="CompraTheNorthFace2.php" class="btn">Comprar</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Images/nikeS.png" class="card-img-top" alt="Nike">
                    <div class="card-body">
                        <h5 class="card-title">Nike Shox TL - Black and Max Orange</h5>
                        <p class="card-text"> R$ 1.299,90</p>
                    </div>
                    <a href="CompraNikeShox.php" class="btn">Comprar</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Images/nikeC.png" class="card-img-top" alt="Nike">
                    <div class="card-body">
                        <h5 class="card-title">Tech Fleece Pant</h5>
                        <p class="card-text">R$ 299,90</p>
                    </div>
                    <a href="CompraTech.php" class="btn">Comprar</a>
                </div>
            </div>
        </div>
    </section>
<br><br><br><br><br>
    <section class="cards2">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="Images/luva.png" class="card-img-top" alt="Everlast">
                    <div class="card-body">
                        <h5 class="card-title">Everlast + RVCA Mister Cartoon MIM Gloves</h5>
                        <p class="card-text">R$ 1.099,90</p>
                    </div>
                    <a href="CompraEverlast.php" class="btn">Comprar</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Images/pumaShorts.png" class="card-img-top" alt="Puma">
                    <div class="card-body">
                        <h5 class="card-title">Shorts Evostripe malha Ddupla masculina</h5>
                        <p class="card-text"> R$ 249,90</p>
                    </div>
                    <a href="CompraPumaShorts.php" class="btn">Comprar</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Images/TNFF.png" class="card-img-top" alt="TNF">
                    <div class="card-body">
                        <h5 class="card-title">Fleece Tka 100 Glacier 1/4 Zíper Feminino Branco</h5>
                        <p class="card-text">R$ 299,90</p>
                    </div>
                    <a href="CompraTheNorthFace.php" class="btn">Comprar</a>
                </div>
            </div>
        </div>
    </section>
<br><br><br><br><br>
    <section class="cards3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="Images/nikeStussy.png" class="card-img-top" alt="Nike">
                    <div class="card-body">
                        <h5 class="card-title">Nike x Stüssy</h5>
                        <p class="card-text">R$ 1.499,90</p>
                    </div>
                    <a href="CompraNikeStussy.php" class="btn">Comprar</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Images/nikeNocta.png" class="card-img-top" alt="Nke">
                    <div class="card-body">
                        <h5 class="card-title">Nike X Nocta</h5>
                        <p class="card-text">R$ 1.899,90</p>
                    </div>
                    <a href="CompraNikeNocta.php" class="btn">Comprar</a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Images/oakley.png" class="card-img-top" alt="oakley">
                    <div class="card-body">
                        <h5 class="card-title">Mochila Oakley x Piet Kitchen Sink Olive</h5>
                        <p class="card-text">R$ 699,90</p>
                    </div>
                    <a href="CompraMochilaOakley.php" class="btn">Comprar</a>
                </div>
            </div>
        </div>
    </section><br>
<br><br><br><br><br>
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