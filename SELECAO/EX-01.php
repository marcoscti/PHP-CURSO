<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>
    body {
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      width: 800px;
      font-family: arial;
      text-align: center;
    }

    form {
      display: flex;
      flex-wrap: wrap;
    }

    input,
    button {
      margin: 0.2em;
      width: 100%;
      padding: 1em;
    }

    .success {
      width: 100%;
      margin-top: 0.8em;
      padding: 1em;
      color: white;
      background: green;
      font-weight: bold;
      text-align: center;
    }

    .danger {
      width: 100%;
      margin-top: 0.8em;
      padding: 1em;
      color: white;
      background: tomato;
      font-weight: bold;
      text-align: center;
    }

    .warning {
      width: 100%;
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
  <h1>Calcule a Maioridade</h1>
  <form method="post">
    <input type="text" name="nome" required placeholder="Nome">
    <input type="number" name="nascimento" required placeholder="Ano de Nascimento">
    <input type="number" name="atual" required placeholder="Ano Atual">
    <button>Calcular</button>
    <?php
    if (isset($_POST['nome']) && isset($_POST['nascimento']) && isset($_POST['atual'])) {

      $nome = $_POST['nome'];
      $nascimento = $_POST['nascimento'];
      $atual = $_POST['atual'];
      $idade = $atual - $nascimento;

      switch ($idade) {
        case $idade < 16:
          echo "<p class='warning'>$nome você é Inelegível para Votação</p>";
          break;
        case $idade > 18 && $idade <= 70:
          echo "<p class='danger'>$nome o seu Voto é Obrigatório</p>";
          break;
        default:
          echo "<p class='success'>$nome o seu Voto é Facultativo</p>";
      }
    } //Validação
    ?>
  </form>

</body>

</html>