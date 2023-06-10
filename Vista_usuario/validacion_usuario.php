<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['Email'];
    $contraseña = $_POST['DNI'];

    try {
        $serverName = "LAPTOP-KS1SV1HT\SQLEXPRESS"; 
        $database = "BD_INCIDENTES"; 
        $username = "RENATO"; 
        $password = "1234"; 

        $conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM Login_U WHERE Email = :Email AND DNI = :DNI";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':Email', $usuario);
        $stmt->bindParam(':DNI', $contraseña);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $_SESSION['Email'] = $usuario;
            header("Location: usuario_incidente.php");
            exit();
        } else {
            echo "Credenciales inválidas";
        }
    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }
}
?>
