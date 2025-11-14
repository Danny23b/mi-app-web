<?php
include 'db.php';

try {
  $sql = "ALTER TABLE usuarios MODIFY id INT AUTO_INCREMENT";
  $pdo->exec($sql);
  echo "La columna 'id' fue actualizada correctamente.";
} catch (PDOException $e) {
  echo "Error al modificar la tabla: " . $e->getMessage();
}
?>
