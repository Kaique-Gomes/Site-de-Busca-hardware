<?php
  session_start();
?>


<!doctype html!>
<html>

<head>

    <!-- METAS -->
  <meta charset="utf-8">
  <meta name="rating" content="general" > <!-- FaixaEtaria -->
  <meta http-equiv="content-language" content="pt-br">  <!-- Lingua do site -->
  <meta name="viewport" content="width=320, initial-scale=1"> <!-- Responsividade em mobile -->
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

  <title> DubWare Sobre</title>

    <!-- Importações -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css" >

</head>

<body class="all">

          <!-- Barra Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">DubWare</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
      
  </div>
</nav>


        <!-- Meio -->
        <div class="card-group mx-5 my-5">

            <div class="card">
                <img src="img/leo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Leonardo Vitorino Silva</h4>
                    <div class="social-barind">
    <a href="https://www.facebook.com/Leo1Vitorino" class="iconind facebook" target="_blank"> <img src="./img/facebook.png" width="40" height="40" alt=""> </a>
    <a href="https://twitter.com/LVitorino07" class="iconind twitter" target="_blank"> <img src=./img/twitter.png width="40" height="40" alt=""> </a>
    <a href="https://www.instagram.com/lvitorino07/" class="iconind instagram" target="_blank"> <img src="./img/instagram.png" width="40" height="40" alt="">
    </a>
  </div>
                </div>
            </div>

            <div class="card">
                <img src="img/gu.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Gustavo Matheus Morinaga Cardoso</h4>
                    <div class="social-barind">
    <a href="" class="iconind facebook" target="_blank"> <img src="./img/facebook.png" width="40" height="40" alt=""> </a>
    <a href="" class="iconind twitter" target="_blank"> <img src=./img/twitter.png width="40" height="40" alt=""> </a>
    <a href="" class="iconind instagram" target="_blank"> <img src="./img/instagram.png" width="40" height="40" alt="">
    </a>
  </div>

                </div>
            </div>

            <div class="card">
                <img src="img/hiroshi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Hiroshi </br> Odo</h4>
                    
                    <div class="social-barind">
    <a href="" class="iconind facebook" target="_blank"> <img src="./img/facebook.png" width="40" height="40" alt=""> </a>
    <a href="" class="iconind twitter" target="_blank"> <img src=./img/twitter.png width="40" height="40" alt=""> </a>
    <a href="" class="iconind instagram" target="_blank"> <img src="./img/instagram.png" width="40" height="40" alt="">
    </a>
  </div>

                </div>
            </div>
            <div class="card">
                <img src="img/kaique.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Kaique Silva de Jesus Gomes</h4>
                    <div class="social-barind">
    <a href="" class="iconind facebook" target="_blank"> <img src="./img/facebook.png" width="40" height="40" alt=""> </a>
    <a href="" class="iconind twitter" target="_blank"> <img src=./img/twitter.png width="40" height="40" alt=""> </a>
    <a href="" class="iconind instagram" target="_blank"> <img src="./img/instagram.png" width="40" height="40" alt="">
    </a>
  </div>

                </div>
            </div>
            <div class="card">
                <img src="img/yuri.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 style="text-align: center;">Yuri Silva de Jesus Gomes</h4>
                    <div class="social-barind">
    <a href="" class="iconind facebook" target="_blank"> <img src="./img/facebook.png" width="40" height="40" alt=""> </a>
    <a href="" class="iconind twitter" target="_blank"> <img src=./img/twitter.png width="40" height="40" alt=""> </a>
    <a href="" class="iconind instagram" target="_blank"> <img src="./img/instagram.png" width="40" height="40" alt="">
    </a>
  </div>

                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
</body>

</html>
</body>

</html>