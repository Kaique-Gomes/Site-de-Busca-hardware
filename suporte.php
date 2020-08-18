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

  <title> DubWare Suporte </title>

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
          <li class="nav-item active">
            <a class="p-2 text-dark" href="sobre.php">Sobre nós</a>
          </li>
        </ul>
       
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
       

      </div>
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
    
  <div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-9 my-5" style="margin-left: auto; margin-right: auto;">
      <div class="card card-signin my-3">
        <div class="card-body">
        <h3>Entrar</h3>

          <form class="form-signin" action="./userAuthenticator.php" method="POST">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control my-3" placeholder="Email address" required autofocus>
              <label for="inputEmail">Email</label>
            </div>
			  <div class="form-label-group ">
              <input type="text" name="Phone" id="inputPhone" class="form-control" placeholder="Phone" data-mask="(00) 00000-0000" maxlength="14" autocomplete="off" required>
              <label  for="inputPhone">Whatsapp</label>
            </div>

            <div class="form-label-group">
              <select class="custom-select">
  <option selected>Sobre</option>
  <option value="1">blabla</option>
  <option value="2">blablabla</option>
  <option value="3">bla</option>
</select>
            </div>
			 <div class="form-label-group ">
              <div class="input-group-prepend">

  </div>
  <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>

            <button class="btn btn-lg btn-block btn-gold" type="submit">Enviar</button>
          </form>
        </div>
      </div>
    </div>
      <script src="js/jquery.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.js"></script>
</body>



</html>
