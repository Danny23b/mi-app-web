<?php
include "db.php";

try {
    $sql = "
        CREATE TABLE IF NOT EXISTS productos (
            id SERIAL PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            precio NUMERIC(10,2) NOT NULL,
            descripcion TEXT
        );
    ";

    $pdo->exec($sql);

    echo "<h2>Tabla creada correctamente ✔</h2>";
} catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage();
}
?>
