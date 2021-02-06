<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            margin: auto;
            width: 20rem;
            padding: 1em;
        }

        input {
            box-sizing: border-box;
            width: 100%;
            padding: 1em;
        }

        /*Mensagens de alerta*/
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

        /* formatação do botão*/
        button {
            margin-top: 1em;
            width: 100%;
            padding: 1em;
            border: 0;
            background: royalblue;
            font-size: 1em;
            font-weight: bold;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Informe suas notas</h1>
        <form method="post">
            <label for="bimestre1">1º Bimestre</label>
            <input type="number" step="any" name="bimestre1">

            <label for="bimestre2">2º Bimestre</label>
            <input type="number" step="any" name="bimestre2">

            <label for="bimestre3">3º Bimestre</label>
            <input type="number" step="any" name="bimestre3">

            <label for="bimestre4">4º Bimestre</label>
            <input type="number" step="any" name="bimestre4">
            <button>Calcular Média</button>
        </form>
        <?php
        if (isset($_POST['bimestre1']) && !empty($_POST['bimestre1'])) {
            $bimestre1 = $_POST['bimestre1'];
            $bimestre2 = $_POST['bimestre2'];
            $bimestre3 = $_POST['bimestre3'];
            $bimestre4 = $_POST['bimestre4'];

            $media = ($bimestre1 + $bimestre2 + $bimestre3 + $bimestre4) / 4;

            if ($media < 4) {
                echo "<p class='danger'>Você está Reprovado</p>";
            } elseif ($media < 7) {
                echo "<p class='warning'>Você está em Recuperação</p>";
            } else {
                echo "<p class='success'>Você está Aprovado</p>";
            }
        }
        ?>
    </div>
</body>

</html>