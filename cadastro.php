<?php
session_start();
include("conexao.php");
header('Content-type: text/html; charset=utf-8');

$nome = mysqli_real_escape_string ($conexao, trim($_POST['NOME']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['SOBRENOME']));
$email = mysqli_real_escape_string($conexao, trim($_POST['EMAIL']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['SENHA'])));
$confirmaSenha = mysqli_real_escape_string($conexao, trim(md5($_POST['confirmSenhaRegister'])));
$telefone = mysqli_real_escape_string($conexao, $_POST['TELEFONE']);
$feedback = mysqli_real_escape_string($conexao, trim($_POST['FEEDBACK']));

$sql = "select count(*) as total from `USUARIO` where `EMAIL` = '$email'";
$sql = "select count(*) as total from `CLIENTE` where `NOME` = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: login.php');
    exit();
}


$sql = "INSERT INTO CLIENTE (NOME, SOBRENOME, TELEFONE, FEEDBACK) VALUES('$nome', '$sobrenome', '$telefone', '$feedback')";
$sql = "INSERT INTO USUARIO (EMAIL, SENHA) VALUES('$email', '$senha')";

if ($senha == $confirmaSenha){
    if ($conexao->query($sql) === true) {
        $_SESSION['status_cadastro'] = true;
    }
}else{
    $_SESSION['senha_incorreta'] = true;
    header('Location: login.php');
    exit();
}

$conexao->close();

header('Location: login.php');
exit();