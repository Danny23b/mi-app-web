<?php
$host = getenv("dpg-d4l1pm7gi27c73erojjg-a");
$dbname = getenv("my_app_heqx");
$user = getenv("my_app_heqx_user");
$pass = getenv("fH6OEYu74VmpCMJ0pKLpGoPIZLPdaPQw");
$port = getenv(5432);

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;database=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
