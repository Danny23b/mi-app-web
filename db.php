<?php
$servername = "mysql.railway.internal";
$username = "root";
$password = "IBTMFGoaNWWmcGQdxMcuGJAOthThPESV";
$dbname = "railway";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Configura PDO para lanzar excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Opcional: mensaje de éxito
    // echo "Conexión exitosa";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
