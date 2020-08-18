<?php
session_start();
include('conexao.php');

if (!empty($_POST) && empty($_POST['EMAIL']) || empty($_POST['SENHA'])) {
    header('Location: ../index.html');
    exit();
}
$TAG = mysqli_real_escape_string($conexao, $_POST['TAG']);
$email = mysqli_real_escape_string($conexao, $_POST['EMAIL']);
$senha = mysqli_real_escape_string($conexao, $_POST['SENHA']);

$query = "select `ID`, `NOME` from `USUARIO` where `EMAIL` = '{$email}' and `SENHA` = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['TAG'] = $TAG;
    $_SESSION['EMAIL'] = $email;
    $_SESSION['SENHA'] = $senha;
    header('Location: ../index.php');
    exit();
} else {
    header('Location: login.php');
    exit();
}
