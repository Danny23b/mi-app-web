<?php
include "db.php";

$sql = "
CREATE TABLE IF NOT EXISTS productos (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio NUMERIC(10,2) NOT NULL,
    descripcion TEXT
);
";

try {
    $pdo->exec($sql);
    echo "Tabla creada correctamente.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
