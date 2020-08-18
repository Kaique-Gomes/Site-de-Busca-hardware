<?php
  session_start();
  include('php/verifica_login.php')
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

  <title> DubWare Sonho </title>

  <!-- Importações -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css\style.css">

  <style>
    #imgtres {
      width: 60%;
    }

    .card-footer {
      position: relative;
      bottom: 0;
      width: 100%;
    }

    .linha {
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
  <div class="social-bar">
    <a href="https://www.facebook.com/BubaPc-416828949123740/?ti=as" class="icon facebook" target="_blank"> <img
        src="./img/facebook.png" width="40" height="40" alt=""> </a>
    <a href="" class="icon twitter" target="_blank"> <img src=./img/twitter.png width="40" height="40" alt=""> </a>
    <a href="" class="icon youtube" target="_blank"> <img src="./img/youtube.png" width="40" height="40" alt=""> </a>
    <a href="" class="icon instagram" target="_blank"> <img src="./img/instagram.png" width="40" height="40" alt="">
    </a>
  </div>

  <!-- Meio -->

  <div class="card text-center container my-4">

    <div class="card-body">
      <h5 class="card-title">Olá, #</h5>
      <p class="card-text">O seu computador dos sonhos focado em : #, #, # está aqui</p>
      <a href="#" class="btn btn-primary">Total: R$ #</a>
    </div>
  </div>


  <div class="card-group mx-5 my-5">

    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">Placa Mãe</h4>
        <p class="card-text" style="text-align: center;">#
        </p>
        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable1">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog"
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


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>

          </div>
        </div>

      </div>


    </div>




    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">Processador</h4>
        <p class="card-text" style="text-align: center;">#</p>


        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable2">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>

    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">HD</h4>
        <p style="text-align: center;" class="card-text">#
        </p>
        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable3">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable3" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>



    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">SSD</h4>
        <p class="card-text" style="text-align: center;">#
        </p>
        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable4">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable4" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>

          </div>
        </div>

      </div>


    </div>
    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">Placa de Video</h4>
        <p class="card-text" style="text-align: center;">#</p>
        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable5">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable5" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!-- Copias -->


  <div class="card-group mx-5 my-5">

    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">Fonte de alimentação</h4>
        <p class="card-text" style="text-align: center;">#
        </p>
        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable6">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable6" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="https://www.submarino.com.br/produto/48707536?epar=102414&hl=lower&opn=COMPARADORESSUB&s_term=COMPARADORESSUB"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>

          </div>
        </div>

      </div>


    </div>




    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">Cooler</h4>
        <p class="card-text" style="text-align: center;">#</p>


        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable7">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable7" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>

    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">Gabinete</h4>
        <p style="text-align: center;" class="card-text">#
        </p>
        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable8">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable8" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>
                      
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>
                      
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>
                      
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>
                      
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>



    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;">Mouse</h4>
        <p class="card-text" style="text-align: center;">#
        </p>
        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable9">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable9" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="https://www.submarino.com.br/produto/48707536?epar=102414&hl=lower&opn=COMPARADORESSUB&s_term=COMPARADORESSUB"
                  class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>

          </div>
        </div>

      </div>


    </div>
    <div class="card">
      <img src="img/logodourado.png" id="imgtres" class="rounded mx-auto d-blockcard-img-top" alt="...">
      <div class="card-body">
        <h4 style="text-align: center;"> Teclado </h4>
        <p class="card-text" style="text-align: center;">#</p>
        <div class="card-footer">
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">

              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"></font>
              </font>

              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                data-target="#exampleModalScrollable10">
                Sobre
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalScrollable10" tabindex="-1" role="dialog"
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
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="img/logodourado.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Blablabla</h5>
                              <p class="card-text">...</p>
                              <button type="button" class="btn btn-primary">Selecionar</button>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <a href="#" class="btn btn-outline-secondary" role="button" aria-pressed="true">R$ #</a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>


  </div>






  <script src="js/jquery.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
</body>



</html>