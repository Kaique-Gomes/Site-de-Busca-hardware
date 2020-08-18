<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if(!$_SESSION['EMAIL']){
    header('location: php/login.php');
    exit();
}
   
?>

