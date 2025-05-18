<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Par o Impar - Grupo 3</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
      background-color: rgb(245, 245, 245);
    }
    h1 {
      text-align: center;
    }
    form {
      text-align: center;
      margin-top: 30px;
    }
    input[type="number"], input[type="submit"], input[type="reset"] {
      padding: 7px 14px;
      font-size: 16px;
      margin: 5px;
    }
    input[type="submit"] {
      background-color: rgb(21, 172, 16);
      color: white;
      border: none;
      border-radius: 5px;
    }
    input[type="reset"] {
      background-color: rgb(180, 0, 0);
      color: white;
      border: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <h1>Par o Impar - Grupo 3</h1>

  <form action="Resultado.php" method="POST">
    <label for="numero">Ingresa un número entero positivo:</label><br><br>
    <input type="number" name="numero" id="numero" required><br><br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Limpiar">
  </form>

</body>
</html>
