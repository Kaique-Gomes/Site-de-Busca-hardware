<?php
  session_start();

?>

<!doctype html!>
<html>

<head>

  <!-- METAS -->
  <meta charset="utf-8">
  <meta name="rating" content="general"> <!-- FaixaEtaria -->
  <meta http-equiv="content-language" content="pt-br"> <!-- Lingua do site -->
  <meta name="viewport" content="width=320, initial-scale=1"> <!-- Responsividade em mobile -->
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title> DubWare </title>
  <!-- Importações -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="stylesheet" href="./css/font.css">


</head>

<body class="all">
 

    <!-- Barra Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">DubWare</a>
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="p-2 text-dark" href="#">Mais populares</a>
          </li>
          <li class="nav-item active">
            <a class="p-2 text-dark" href="suporte.php">Suporte</a>
          </li>
          <li class="nav-item active">
            <a class="p-2 text-dark" href="sobre.php">Sobre nós</a>
          </li>
        </ul>
        <form class="form-inline my-1 my-lg-0 px-md-5 .align-content-xl-center">
          <input class="form-control mr-sm-2" type="search" placeholder="Escreva..." aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <?php
      if(isset($_SESSION['email']))
{
   echo '<div class="dropdown show">
   <a class="mx-5" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup=""
     aria-expanded="false">
     <img class="ml-4" src="./img/perfil.png " width="40" height="40" alt="">
   </a>

   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
     <a class="dropdown-item" href="#">Meu perfil</a>
     <a class="dropdown-item" href="#">Configurações</a>
     <a class="dropdown-item" href="./php/logout.php">Sair</a>
   </div>
 </div>

</div>';
}
else
{
   echo '<a href="php/login.php">LOGIN</a>';
}
?>



        
    </nav>
    <div class="social-bar">
      <a href="https://www.facebook.com/BubaPc-416828949123740/?ti=as" class="icon facebook" target="_blank"> <img
          src="./img/facebook.png" width="40" height="40" alt=""> </a>
      <a href="" class="icon twitter" target="_blank"> <img src=./img/twitter.png width="40" height="40" alt=""> </a>
      <a href="" class="icon youtube" target="_blank"> <img src="./img/youtube.png" width="40" height="40" alt=""> </a>
      <a href="" class="icon instagram" target="_blank"> <img src="./img/instagram.png" width="40" height="40" alt="">
      </a>
    </div>
    <!-- Meio -->
    <div style="margin-top:11%">
      <div class="container">
        <div class="card-deck mb-3 text-center">

          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Idealizamos Para você</h4>
            </div>
            <div class="card-body">

              <ul class="list-unstyled mt-3 mb-4">
                <li>Escolha até 3 programas</li>
                <li>Iremos usar nossa I.A </li>
                <li>Acharemos o melhor para você</li>
                <li>Enviaremos seu computador pronto</li>
              </ul>
              <a class="btn btn-lg btn-block btn-gold" href="opcao1.php">Começar</a>

            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Idealize sozinho</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Escolha a(s) peça(s)</li>
                <li>Iremos usar nossa I.A</li>
                <li>Localizamos o forcedor mais confiavel</li>
                <li>com a peça mais barata</li>
              </ul>
              <a class="btn btn-lg btn-block btn-gold" href="opcao2.php">Começar</a>
            </div>
          </div>
          <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Meus sonhos</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"> <small class="text-muted"></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Salve suas maquinas favoritas</li>
                <li>Espere chegar em seu melhor preço</li>
                <li>Compartilhe com seus amigos</li>
                <li>Deixe tudo planejado</li>
              </ul>
              <a class="btn btn-lg btn-block btn-gold" href="opcao3.php">Começar</a>
            </div>
          </div>
        </div>
      </div>


      <!-- rodape -->
      <div class=" container " style="margin-top:6%">
        <div class="progress bg-transparent">
          <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
            style="width: 20%;">
            20%
          </div>
        </div>
      </div>

      <script src="js/jquery.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.js"></script>

</body>



</html>