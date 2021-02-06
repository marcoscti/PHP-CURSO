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
    }

    form {
      display: flex;
      flex-wrap: wrap;
    }

    input,
    button,
    select {
      margin: 0.2em;
      width: 100%;
      padding: 1em;
    }
  </style>
</head>

<body>
  <h1>Digite os Números</h1>
  <form method="post">
    <input type="number" name="number1" required placeholder="Numero 01">
    <input type="number" name="number2" required placeholder="Numero 02">
    <select name="operator">
      <option disabled selected>Selecione a operação</option>
      <option value="1">Adição</option>
      <option value="2">Divisão</option>
      <option value="3">Subtração</option>
      <option value="4">Multiplicação</option>
    </select>
    <button>Calcular</button>
    <?php
  if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operator'])) {

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];

    switch ($operator) {
      case "1":
        $resultado = $number1 + $number2;
        echo "<h1>" . $resultado. "</h1>";
        break;
      case "2":
        $resultado = $number1 / $number2;
        echo "<h1>" . $resultado. "</h1>";
        break;
      case "3":
        $resultado = $number1 - $number2;
        echo "<h1>" .$resultado. "</h1>";
        break;
      case "4":
        $resultado = $number1 * $number2;
        echo "<h1>" . $resultado. "</h1>";
        break;
      default:
        echo "Escolha a operação";
    }
  } //Validação
  ?>
  </form>
  
</body>

</html>