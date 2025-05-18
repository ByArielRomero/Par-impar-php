<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
      background-color: rgb(245, 245, 245);
      text-align: center;
    }
    .mensaje {
      font-weight: bold;
      font-size: 22px;
      color: green;
    }
    .error {
      color: red;
      font-weight: bold;
      font-size: 18px;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #0056b3;
    }
  </style>
</head>
<body>

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
} else {
  echo "<div class='error'>Acceso no válido. Debes enviar el formulario.</div>";
}
?>

<br><a href="formulario.php">😊Volver al formulario</a>

</body>
</html>
