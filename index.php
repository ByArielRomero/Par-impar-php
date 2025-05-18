<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Par o Impar - Grupo 3</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
      background-color:rgb(245, 245, 245);
    }
    form {
      margin-bottom: 20px;
    }
    input[type="number"] {
      padding: 5px;
      font-size: 16px;
    }
    input[type="submit"] {
      padding: 7px 14px;
      font-size: 16px;
      margin-left: 10px;
      background-color:rgb(21, 172, 16);
      color: white;
      border: none;
      border-radius: 5px;
    }
    .mensaje {
      font-weight: bold;
      font-size: 18px;
      text-align: center;
    }
    .error {
      color: red;
      font-weight: bold;
      text-align: center;
    }
    h1 {
      text-align: center;
    }
    form {
      text-align: center;
    }
  </style>
</head>
<body>

  <h1>Par o Impar - Grupo 3</h1>

  <form method="POST">
    <label for="numero">Ingresa un número entero positivo: </label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    if (filter_var($numero, FILTER_VALIDATE_INT) !== false && $numero > 0) {
      if ($numero % 2 == 0) {
        echo "<div class='mensaje'>El número $numero es PAR.</div>";
      } else {
        echo "<div class='mensaje'>El número $numero es IMPAR.</div>";
      }
    } else {
      echo "<div class='error'>Error: Debes ingresar un número entero positivo.</div>";
    }
  }
  ?>

</body>
</html>
