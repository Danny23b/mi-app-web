<?php include "db.php"; ?>
<?php include "header.php"; ?>

<?php
$id = $_GET['id'];

if ($_POST) {
    $stmt = $pdo->prepare("UPDATE productos SET nombre=?, precio=?, descripcion=? WHERE id=?");
    $stmt->execute([$_POST['nombre'], $_POST['precio'], $_POST['descripcion'], $id]);
    header("Location: index.php");
}

$stmt = $pdo->prepare("SELECT * FROM productos WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Editar producto</h2>

<form method="POST">
    <input type="text" name="nombre" value="<?= $row['nombre'] ?>" required>
    <input type="number" step="0.01" name="precio" value="<?= $row['precio'] ?>" required>
    <textarea name="descripcion"><?= $row['descripcion'] ?></textarea>
    <button type="submit">Actualizar</button>
</form>

<?php include "footer.php"; ?>
