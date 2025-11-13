<?php
include 'db.php';

$id = $_GET['id'];

try {
  $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
  $stmt->execute([$id]);
  header("Location: index.php");
} catch (PDOException $e) {
  echo "Error al eliminar: " . $e->getMessage();
}
?>
