<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
  <link rel="shortcut icon" href="imagens/calculadora.png" type="image/x-icon">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <h1>Calculadora</h1>
    <div class="row">
      <div class="calculadora">
        <form name="CALCULADORA" method="post" class="row">
          <div class="calc-form">
            <h3>Calculadora desenvolvida com Php</h3><br>
            <input type="text" class="form-controle" name="primeiroCampo" placeholder="Digite o primeiro número...">
            <input type="text" class="form-controle" name="segundoCampo" placeholder="Digite o segundo número...">
            <select name="op" class="form-controle">
              <option value="soma">Somar</option>
              <option value="subtrair">Subtrair</option>
              <option value="multiplicar">Multiplicar</option>
              <option value="dividir">Dividir</option>
            </select>
            <input type="submit" class="btn btn-primary" value="Calcular" style="margin: 20px 10px">
            <input type="reset" class="btn btn-danger" value="limpar campos" style="margin: 20px 10px">
          </div>

          <!-- calculadora -->
          <?php
          if (isset($_POST['primeiroCampo']) && ($_POST['segundoCampo'])) {
            $a = $_POST['primeiroCampo'];
            $b = $_POST['segundoCampo'];
            $op = $_POST['op'];
            $c = [];

            if ($op == "soma") {
              $c = $a + $b;
              echo '<br>';

              echo "O resultado da soma é: $c";
            } else if ($op == "subtrair") {
              $c = $a - $b;
              echo '<br>';

              echo "O resultado da subtração é: $c";
            } else if ($op == "multiplicar") {
              $c = $a * $b;
              echo '<br>';

              echo "O resultado da multiplicação é: $c";
            } else if ($op == "dividir") {
              $c = $a / $b;
              echo '<br>';

              echo "O resultado da divisão é: $c";
            } else if ($op != "soma" || $op != "subtrair" || $op != "multiplicar" || $op != "dividir")
              echo '<br>';
          }
          ?>
        </form>
      </div>
    </div>
  </div>

</body>

</html>