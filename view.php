<?php include "db.php"; ?>
<?php include "header.php"; ?>

<?php
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM productos WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Detalle del producto</h2>

<p><strong>Nombre:</strong> <?= $row['nombre'] ?></p>
<p><strong>Precio:</strong> <?= $row['precio'] ?></p>
<p><strong>Descripción:</strong> <?= $row['descripcion'] ?></p>

<a class="btn" href="index.php">Regresar</a>

<?php include "footer.php"; ?>
