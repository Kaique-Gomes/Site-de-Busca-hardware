<?php
    $conexao = mysqli_connect('localhost', 'root', 'usbw', 'sitetcc') or die('Não foi possível conectar');
    $conexao->set_charset("utf8");
    mysqli_set_charset($conexao, "utf8");
?>