<?php

if(isset($_POST['submit']))
{
    // print_r("Nome: ".$_POST['nome']);
    // print_r('<br>');
    // print_r("Email: ".$_POST['email']);
    // print_r('<br>');
    // print_r("Telefone: ".$_POST['telefone']);
    // print_r('<br>');
    // print_r("Gênero: ".$_POST['genero']);
    // print_r('<br>');
    // print_r("Data de Nascimento: ".$_POST['dataNascimento']);
    // print_r('<br>');
    // print_r("Estado: ".$_POST['estado']);
    // print_r('<br>');
    // print_r("Endereço: ".$_POST['endereco']);
   include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,senha) 
    VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$senha')");
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
        body{
          margin: 0;
        }
        .box{

        margin-top: 25% ;
        margin-left: 50%;
        transform: translate(-50%,-50%);
        background-color:black;
        padding: 15px;
        border-radius: 15px;
        width: 80%;
        color: white;
        margin-bottom: -20%;
    }
    .pop img{
        position: absolute;
        left: -4%;
        top: 25%;
    }
    .pop h1 {
        position: absolute;
        left: 9.1%;
        top: 50%;
    }
    fieldset{
        border: 3px solid white;
           padding: 15px;
           margin-left: 400px;
    }
legend{
    margin-bottom: 10px;

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
        color: white;
    }
    #data_nasc{
        border: 2px solid white;
        padding: 8px;
        border-radius: 10px;
    
        font-size: 15px;
        background-color: black;
        color: white;
    }
    #submit{
        background-image: linear-gradient(to right,#5a849f, rgb(17,54,71));
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
    footer{
        position: absolute;
 top: 150%;
 width:100%;
    }
    </style>
</head>


<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Home.php">
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
                            <a class="nav-link" style="color: white;" href="Produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="signIn" style="color: white;" href="/login.php">Entrar</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="signUp" style="color: white;" href="/formulario.php">Inscrever-se</a>
                </li>
            </ul>
        </nav>
    </header>
    <section>
    <div  class="box">
        <form action="formulario.php" method="POST">
            <div class="pop"> 
           <img class="" src="/Images/Logo.png" alt="">
            <h1 class="">VORTEX</h1>
        </div>
          
            <fieldset>
               <br>
               <div class="inputbox">
                <input type="text" name="nome" id="nome"class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
               </div>
               <br><br>
               <div class="inputbox">
                <input type="text" name="email" id="email"class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
               </div>
               <br><br>
               <div class="inputbox">
                <input type="tel" name="telefone" id="telefone"class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
               </div>
               <br>
               <p>Gênero</p>
               <input type="radio" name="sexo" id="feminino" value="feminino" required>
               <label for="feminino">Feminino</label>
               <br>
               <input type="radio" name="sexo" id="masculino" value="masculino" required>
               <label for="masculino">Masculino</label>
               <br>
               <input type="radio" name="sexo" id="outro" value="outro">
               <label for="outro">Outro</label>
               <br><br>

                <label for="data_nasc"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nasc" id="data_nasc">

               <br><br><br>
               <div class="inputbox">
                <input type="text" name="cidade" id="cidade"class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
               </div>
               <br><br>
               <div class="inputbox">
                <input type="text" name="estado" id="estado"class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
               </div>
               <br><br>
               <div class="inputbox">
                <input type="password" name="senha" id="senha"class="inputUser" required>
                <label for="senha" class="labelInput">Senha</label>
               </div>
               <br><br>
            <input type="submit" value="Cadastrar" name="submit" id="submit" >
            </fieldset>

        </form>
    </section>

    <footer class="bg-black text-center text-white"  >

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