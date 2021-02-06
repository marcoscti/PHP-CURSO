<?php
$usuarios = array(
    0=>['nome'=>'Marcos','email'=>'marcoscti@email.com','senha'=>'aeiou'],
    1=>['nome'=>'Guilherme','email'=>'guilherme@email.com','senha'=>'bcdfg'],
    2=>['nome'=>'Francisco','email'=>'francisco@email.com','senha'=>'abcde']
);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        table,th,tr,td{
            border-collapse: collapse;
            border:1px solid black;
            padding: 0.5em;
        }
        table{
            width: 80%;
            margin: auto;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Usando o Foreach</h1>
    <table>
        <thead>
           <th>ID</th> 
           <th>Nome</th> 
           <th>e-mail</th> 
           <th>Senha</th>
           <th>Ações</th> 
        </thead>
        <tbody>
        <?php foreach($usuarios as $usuario):?>
           <tr>
               <td>#</td>
               <td><?=$usuario['nome']?></td>
               <td><?=$usuario['email']?></td>
               <td><?=$usuario['senha']?></td>
               <td>
                   <button>Editar</button>
                   <button>Excluir</button>
                </td>
           </tr>     
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>

