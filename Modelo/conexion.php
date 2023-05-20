<?php
$serverName = "LAPTOP-KS1SV1HT\SQLEXPRESS"; 
$database = "BD_INCIDENTES"; 
$username = "RENATO"; 
$password = "1234"; 

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>
