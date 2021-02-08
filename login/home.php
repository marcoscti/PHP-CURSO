<?php
session_start();
if($_SESSION['nome']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá <?=$_SESSION['nome']?>, Seja bem vindo</h1>

    <a href="logof.php">Sair</a>
</body>
</html>
<?php
}else{
    header("location:index.php?msg=Você deve entrar com a senha antes!.");
}
