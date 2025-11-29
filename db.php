<?php
$host = getenv("DB_HOST");   
$dbname = getenv("DB_NAME");     
$user = getenv("DB_USER");       
$pass = getenv("DB_PASS");       
$port = getenv("DB_PORT");       

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
