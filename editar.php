<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];

// Obtener datos del usuario
try {
  $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
  $stmt->execute([$id]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Error al obtener usuario: " . $e->getMessage());
}
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

    try {
      $update = $pdo->prepare("UPDATE usuarios SET nombre = ?, correo = ?, telefono = ? WHERE id = ?");
      $update->execute([$nombre, $correo, $telefono, $id]);
      echo "<p>Usuario actualizado correctamente</p>";
      header("refresh:1; url=index.php");
    } catch (PDOException $e) {
      echo "<p>Error al actualizar: " . $e->getMessage() . "</p>";
    }
  }
  ?>
</body>
</html>
