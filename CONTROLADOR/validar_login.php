<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "incidentes";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}


$correo = $_POST['correo'];
$contraseña = sha1($_POST['contraseña']); 


$sql = "SELECT * FROM administrador WHERE correo_a = '$correo' AND contraseña_a = '$contraseña'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['id_admin'] = $row['id_admin'];

    header("Location: ../VISTA/index.php");
    exit();
} else {
    echo '<script>alert("El usuario no existe o las credenciales son incorrectas"); window.location="../VISTA/login.html";</script>';
}

$conn->close();
?>
