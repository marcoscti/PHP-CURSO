<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background-color: gainsboro;
            color: royalblue;
        }
        .container {
            margin: auto;
            height: 40em;
            width: 80%;
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 25rem;
            box-sizing: border-box;
            padding: 0.9rem;
            background: white;
        }

        h1 {
            text-align: center;
            text-transform: uppercase;
            margin-bottom: 0.9em;
        }

        form>input {
            box-sizing: border-box;
            width: 100%;
            padding: 0.8em;
            border-radius: 0.5em;
            border: 1px solid gainsboro;
        }

        button {
            margin-top: 0.8em;
            width: 100%;
            padding: 0.8em;
            border: none;
            background: royalblue;
            color: white;
            text-transform: uppercase;
            font-size: 1.2em;
        }
        .success {
            margin-top: 0.8em;
            padding: 1em;
            color: white;
            background: green;
            font-weight: bold;
            text-align: center;
        }

        .danger {
            margin-top: 0.8em;
            padding: 1em;
            color: white;
            background: tomato;
            font-weight: bold;
            text-align: center;
        }

        .warning {
            margin-top: 0.8em;
            padding: 1em;
            color: white;
            background: gold;
            color: black;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="card">
        <h1>Calcule seu IMC</h1>
        <form method="post">
            <label for="nome">Informe seu nome</label>
            <input type="text" name="nome" placeholder="EX:. Joaquim">
            <label for="nome">Informe sua altura em (cm)</label>
            <input type="text" name="altura" placeholder="EX:. 1.70">
            <label for="nome">Informe seu Peso</label>
            <input type="number" name="peso" placeholder="EX:. 75">
            <button>Conferir</button>
        </form>
        <?php
        if(
            isset($_POST['nome']) && !empty($_POST['nome'])
            && isset($_POST['altura']) && !empty($_POST['altura'])
            && isset($_POST['peso']) && !empty($_POST['peso'])
            ){
            
            $nome = $_POST['nome'];
            $altura = $_POST['altura'];
            $peso = $_POST['peso'];
            
            $imc = $peso/($altura*$altura);
            if($imc >20 && $imc<=24.9){
                echo "<div class='success'>".$nome." sua condição é Normal</div>";
            }elseif($imc >24.9 && $imc<=29.9){
                echo "<div class='warning'>".$nome." sua condição é sobrepeso</div>";
            }elseif($imc>30){
                echo "<div class='danger'>".$nome." sua condição é Obesidade</div>";
            }
        }else{
            echo "<div class='danger'> Inicie preenchendo o formulário acima</div>";
        }
    ?>
    </div>
    </div>
</body>
</html>