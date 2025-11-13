<?php
$servername = "mysql.railway.internal"; // Reemplaza con tu host real de Railway
$username = "root"; // Cambia según tu config
$password = "IBTMFGoaNWWmcGQdxMcuGJAOthThPESV"; // Contraseña de tu base
$dbname = "railway"; // Nombre de tu base

$pdo = new PDO("mysql:host=mysql.railway.internal;dbname=railway", "root", "IBTMFGoaNWWmcGQdxMcuGJAOthThPESV");

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
?>
