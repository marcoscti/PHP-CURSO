<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando o For</title>
    <style>
    table{
        width: 70%;
        margin: auto;
    }
    table,td{
        border:1px solid black;
        border-collapse: collapse;
    }
    h1{
        text-align: center;
    }
</style>
</head>
<body>
<h1>Usando o FOR</h1>
<table>
    <?php

    $linha = 10;
    $coluna = 6;
    //estrutura para gera as linhas
    for ($contagem = 0; $contagem < $linha; $contagem++) {
    ?>
        <tr>
            <?php
            //Estrutura para gerar as colunas
            for ($cont = 0; $cont < $coluna; $cont++) {
            ?>
                <td>Teste</td>
            <?php
            }
            ?>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>