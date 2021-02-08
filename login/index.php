<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p{
        padding: 0.8em;
        background: tomato;
    }
    </style>
</head>
<body>

<?=isset($_GET['msg']) ? "<p>".$_GET['msg']."</p>" : ""?>


    <form action="processa.php" method="post">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="password" name="senha" placeholder="Sua senha" required>
<button>Acessar</button>
    </form>
</body>
</html>