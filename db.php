<?php
$servername = "mysql.railway.internal"; // Reemplaza con tu host real de Railway
$username = "root"; // Cambia según tu config
$password = "IBTMFGoaNWWmcGQdxMcuGJAOthThPESV"; // Contraseña de tu base
$dbname = "railway"; // Nombre de tu base

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
?>
