<?php include "db.php"; ?>
<?php include "header.php"; ?>

<h2>Listado de Productos</h2>

<a class="btn" href="create.php">Agregar nuevo producto</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>

<?php
$stmt = $pdo->query("SELECT * FROM productos ORDER BY id ASC");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nombre']}</td>
            <td>\${$row['precio']}</td>
            <td>
                <a href='view.php?id={$row['id']}'>Ver</a> |
                <a href='edit.php?id={$row['id']}'>Editar</a> |
                <a href='delete.php?id={$row['id']}'>Eliminar</a>
            </td>
          </tr>";
}
?>
</table>

<div class="video-container">
    <h3>Video recomendado</h3>
    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
</div>

<?php include "footer.php"; ?>
