<?php
$host = getenv("dpg-d4l1csjuibrs73fpnic0-a");
$dbname = getenv("my_app_zwdv");
$user = getenv("my_app_zwdv_user");
$pass = getenv("IiLLuxOd12oITw9JaM34ZC7jdMDDriUM");
$port = getenv("5432");

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>

