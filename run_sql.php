<?php
include "db.php";

$sql = file_get_contents("tabla.sql");

try {
    $pdo->exec($sql);
    echo "Tabla creada desde archivo SQL.";
} catch (PDOException $e) {
    echo $e->getMessage();
}
