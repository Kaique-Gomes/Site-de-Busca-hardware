<?php
  session_start();
?>
<?php
$logout = isset($_GET['logout']) ? $_GET['logout'] : "";

if ($logout == 1)
{
unset($_SESSION['username']);
}
?>
<Html>

<head>
   <!-- METAS -->
   <meta charset="utf-8">
  <meta name="rating" content="general"> <!-- FaixaEtaria -->
  <meta http-equiv="content-language" content="pt-br"> <!-- Lingua do site -->
  <meta name="viewport" content="width=320, initial-scale=1"> <!-- Responsividade em mobile -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- Biblioteca da W3Schools a qual foi usada nas tabs -->
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

  <title> DubWare OP1 </title>

  <!-- Importações -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component1.css" />
  <script src="js/modernizr-2.6.2.min.js"></script>





  <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    })

function opentabs(evt, tabsName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(tabsName).style.display = "block";
  evt.currentTarget.className += "";

  var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
}
  </script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
}
.linha{ 
max-width: 50ch; 
overflow: hidden; 
text-overflow: ellipsis; 
white-space: pre-line; 
} 
  </style>

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
  <!-- Meio -->

<div class="social-bar">
    <a href="https://www.facebook.com/BubaPc-416828949123740/?ti=as" class="icon facebook" target="_blank"> <img
        src="./img/facebook.png" width="40" height="40" alt=""> </a>
    <a href="" class="icon twitter" target="_blank"> <img src=./img/twitter.png width="40" height="40" alt=""> </a>
    <a href="" class="icon youtube" target="_blank"> <img src="./img/youtube.png" width="40" height="40" alt=""> </a>
    <a href="" class="icon instagram" target="_blank"> <img src="./img/instagram.png" width="40" height="40" alt="">
    </a>
  </div>






<!-- l Jogos -->
  <div id="Jogos" class="w3-container  mx-auto city">
    
    <div class="album py-2">
      <div class="container">
      <h1 class="text-white"> <strong> Jogos  <h4>Escolha os programas mais utilizados por você</h4> </strong>  </h1>
        <div class="row">
       
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/csgo.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">CS GO</font>
                  </small>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/rsix.png" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">Rainbow Six</font>
                  </small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/lol.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">League of Legends</font>
                  </small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/dota.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">Dota</font>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>





<!-- l Edicao -->
  <div id="edicao" class="w3-container city" style="display:none">
    <div class="album py-2">
      <div class="container">
      <h1 class="text-white"> <strong> Edição  <h4>Escolha os programas mais utilizados por você</h4> </strong>  </h1>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/ps.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">Adobe Photoshop</font>
                  </small>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/au.png" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">Adobe Audition</font>
                  </small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/AfterE.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">Adobe After Effects</font>
                  </small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/dota.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">Dota</font>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>




<!-- l Trabalho-->
  <div id="trabalho" class="w3-container city" style="display:none">
    <div class="album py-2">
      <div class="container">
      <h1 class="text-white"> <strong> Work  <h4>Escolha os programas mais utilizados por você</h4> </strong>  </h1>
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/csgo.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">CS GO</font>
                  </small>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/rsix.png" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">Rinbow Six</font>
                  </small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/lol.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">League of Legends</font>
                  </small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/programas/dota.jpg" alt="some text" width=100% height=25%>
              <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">

                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;"></font>
                    </font>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                      data-target="#exampleModalScrollable">
                      Sobre
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-outline-secondary ">
                        <input type="checkbox" checked autocomplete="off"> Selecionar
                      </label>
                    </div>
                  </div>
                  <small class="text-muted">
                    <font style="vertical-align: inherit;">Dota</font>
                  </small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>
<!-- Start Nav Structure -->
<button class="cn-button" id="cn-button">+</button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a onclick="opentabs(event,'Jogos')" class="tablink"><img src="img/iconejogo.png" width=20% height=20%> </a></li>
				      <li><a onclick="opentabs(event,'edicao')" class="tablink"> <img src="img/iconecinema.png" width=13% height=15%></a></li>
				      <li><a onclick="opentabs(event,'trabalho')" class="tablink"> <img src="img/workicone.png" width=13% height=15%> </a></li>
				      <li><a> </a></li>
				      <li><a href="pecas.php"><span class=""></span>-></a></li> 	<!-- Proxima pagina -->
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay"></div>
			

<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/polyfills.js"></script>
<script src="js/demo1.js"></script>



</body>



</html>