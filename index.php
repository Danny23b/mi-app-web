<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>CRUD de Usuarios</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>Gestión de Usuarios</h1>
  <a href="agregar.php" class="btn">Agregar Usuario</a>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Teléfono</th>
      <th>Acciones</th>
    </tr>
    <?php
      $sql = "SELECT * FROM usuarios";
      $stmt = $pdo->query($sql);
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['correo']}</td>
                <td>{$row['telefono']}</td>
                <td>
                  <a href='editar.php?id={$row['id']}'>Editar</a> |
                  <a href='eliminar.php?id={$row['id']}'>Eliminar</a>
                </td>
              </tr>";
      }
    ?>
  </table>
</body>
</html>
