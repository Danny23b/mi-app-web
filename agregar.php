<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Usuario</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Agregar Nuevo Usuario</h1>
  <form action="" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required><br>
    <input type="email" name="correo" placeholder="Correo" required><br>
    <input type="text" name="telefono" placeholder="Teléfono"><br>
    <button type="submit">Guardar</button>
  </form>

  <?php
  if ($_POST) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, correo, telefono) VALUES ('$nombre', '$correo', '$telefono')";
    if ($conn->query($sql) === TRUE) {
      echo "<p>Usuario agregado correctamente</p>";
      header("refresh:1; url=index.php");
    } else {
      echo "<p>Error: " . $conn->error . "</p>";
    }
  }
  ?>
</body>
</html>
