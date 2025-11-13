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

    try {
      $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, correo, telefono) VALUES (?, ?, ?)");
      $stmt->execute([$nombre, $correo, $telefono]);
      echo "<p>Usuario agregado correctamente</p>";
      header("refresh:1; url=index.php");
    } catch (PDOException $e) {
      echo "<p>Error: " . $e->getMessage() . "</p>";
    }
  }
  ?>
</body>
</html>
