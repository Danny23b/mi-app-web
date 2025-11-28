<?php include "db.php"; ?>
<?php include "header.php"; ?>

<?php
if ($_POST) {
    $stmt = $pdo->prepare("INSERT INTO productos (nombre, precio, descripcion) VALUES (?, ?, ?)");
    $stmt->execute([$_POST['nombre'], $_POST['precio'], $_POST['descripcion']]);
    header("Location: index.php");
}
?>

<h2>Agregar producto</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="number" step="0.01" name="precio" placeholder="Precio" required>
    <textarea name="descripcion" placeholder="Descripción"></textarea>
    <button type="submit">Guardar</button>
</form>

<?php include "footer.php"; ?>

