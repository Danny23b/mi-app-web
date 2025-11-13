<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Editar Usuario</h1>
  <form method="POST">
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
    <input type="email" name="correo" value="<?php echo $row['correo']; ?>" required><br>
    <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br>
    <button type="submit">Actualizar</button>
  </form>

  <?php
  if ($_POST) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $update = "UPDATE usuarios SET nombre='$nombre', correo='$correo', telefono='$telefono' WHERE id=$id";
    if ($conn->query($update) === TRUE) {
      echo "<p>Usuario actualizado correctamente</p>";
      header("refresh:1; url=index.php");
    } else {
      echo "<p>Error: " . $conn->error . "</p>";
    }
  }
  ?>
</body>
</html>
