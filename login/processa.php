<?php
session_start();

$senha = $_POST['senha'];

if($senha === "admin"){
    $_SESSION['nome'] = $_POST['nome'];
    header("location:home.php");
}else{
    header("location:index.php?msg=Senha Inválida");
}