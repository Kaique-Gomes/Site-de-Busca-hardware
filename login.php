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


 <!-- PHP -->
  <?php
  ini_set("display_errors", 0);
  error_reporting(0);
  if ($_GET["action"] == log) {
    $email = $_POST("EMAIL");
    $senha = $_POST["SENHA"];
    setcookie("logado", "conta");
  }


  ?>

  <!-- Importações -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css" >

</head>

<body class="all">

  <!-- Meio -->
  
  <a class="btn ml-4 mx-4 mt-3  btn-primary" href="../index.php">Voltar</a>
  
  <!-- Login -->
  <div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-4" style="margin-left: auto; margin-right: auto;">
      <div class="card card-signin my-3">
        <div class="card-body">
        <h3>Entrar</h3>

          <form class="form-signin" action="./userAuthenticator.php" method="POST">
            <div class="form-label-group">
              <input type="email" name="EMAIL" id="inputEmail" class="form-control my-3" placeholder="Email address" required autofocus>
              <label for="inputEmail">Email</label>
            </div>

            <div class="form-label-group">
              <input type="password" name="SENHA" id="inputPassword" class="form-control" placeholder="Password" required>
              <label for="inputPassword">Senha</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>

            <hr class="my-4">
            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Entrar com Google</button>
            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Entrar com Facebook</button>
          </form>
        </div>
      </div>
    </div>


  <!-- Cadastrar -->
    <div class="card-group my-3 col-lg-6 card-signin" style="margin-left: auto; margin-right: auto;">
      <div class="card" style="border-radius: 1rem;">
        <div class="card-body">
          <h3>Me cadastrar</h3>
          <form class="form-signin row mt-3" action="./cadastro.php" method="POST">
            <div class="form-label-group col-sm-6">
              <input type="text" name="nome" id="inputName" class="form-control" placeholder="Name" required>
              <label style="margin: 0px 0px 0px 15px" for="inputName">Nome</label>
            </div>

            <div class="form-label-group col-sm-6">
              <input type="text" name="SOBRENOME" id="inputLastName" class="form-control" placeholder="Last Name" required>
              <label style="margin: 0px 0px 0px 15px" for="inputLastName">Sobrenome</label>
            </div>

            <div class="form-label-group col-sm-6">
              <input type="email" name="EMAIL" id="inputEmailRegister" class="form-control" placeholder="Email address" required>
              <label style="margin: 0px 0px 0px 15px" for="inputEmailRegister">Email</label>
            </div>

            <div class="form-label-group col-sm-6">
              <input type="text" name="TELEFONE" id="inputPhone" class="form-control" placeholder="Phone" data-mask="(00) 00000-0000" maxlength="14" autocomplete="off" required>
              <label style="margin: 0px 0px 0px 15px" for="inputPhone">Whatsapp</label>
            </div>

            <div class="form-label-group col-sm-6">
              <input type="password" name="SENHA" id="inputPasswordRegister" class="form-control" placeholder="Password" required>
              <label style="margin: 0px 0px 0px 15px" for="inputPasswordRegister">Senha</label>
            </div>

            <div class="form-label-group col-sm-6">
              <input type="password" name="confirmSenhaRegister" id="inputPasswordConfirm" class="form-control" placeholder="Password" required>
              <label style="margin: 0px 0px 0px 15px" for="inputPasswordConfirm">Confirmar Senha</label>
            </div>

            <div class="form-label-group col-sm-12">
              <input type="text" name="FEEDBACK" id="inputFeedback" class="telefone form-control" placeholder="Feedback" required>
              <label style="margin: 0px 0px 0px 15px" for="inputFeedback">Como conheceu a BabuPC?</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase col-sm-7 mx-auto mt-4" type="submit" aria-pressed="true">Me cadastrar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
    if($_SESSION['status_cadastro']):
  ?>
    <div class="notification is-success col-sm-6" style="text-align: center; margin-left: auto; margin-right: auto">Cadastrado com sucesso!
      Faça o login para entrar na sua conta.</div>
    </div>
  <?php
  endif;
  unset($_SESSION['status_cadastro']);
  ?>

  <?php
    if($_SESSION['usuario_existe']):
  ?>
    <div class="notification is-alert col-sm-6" style="text-align: center; margin-left: auto; margin-right: auto">
      O usuário escolhido já existe. Informe outro e tente novamente.
    </div>
  <?php
    endif;
    unset($_SESSION['usuario_existe']);
  ?>

<?php
    if($_SESSION['senha_incorreta']):
  ?>
    <div class="notification is-info col-sm-6" style="text-align: center; margin-left: auto; margin-right: auto">Usuário ou Senha incorretos.
    Tente novamente.</div>
  <?php
  endif;
  unset($_SESSION['senha_incorreta']);
  ?>
  
</body>
<script src="../js/jquery.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/jquery.mask.min.js"></script>
</body>

</html> 