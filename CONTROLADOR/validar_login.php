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

// VALIDACION ADMIN
$sql_admin = "SELECT * FROM administrador WHERE correo_a = '$correo' AND contraseña_a = '$contraseña'";
$result_admin = $conn->query($sql_admin);

if ($result_admin->num_rows > 0) {
    $row_admin = $result_admin->fetch_assoc();
    session_start();
    $_SESSION['id_admin'] = $row_admin['id_admin'];

    header("Location: ../VISTA/index_admin.php");
    exit();
} else{
    echo '<script>alert("El usuario no existe o las credenciales son incorrectas"); window.location="../VISTA/login_admin.html";</script>';
}

// VALIDACION USUARIO
$sql_usuario = "SELECT * FROM usuario WHERE correo = '$correo' AND contraseña = '$contraseña'";
$result_usuario = $conn->query($sql_usuario);

if ($result_usuario->num_rows > 0) {
    $row_usuario = $result_usuario->fetch_assoc();
    session_start();
    $_SESSION['id_usuario'] = $row_usuario['id_usuario'];
    $_SESSION['nombre'] = $row_usuario['nombre'];

    header("Location: ../VISTA/index_alumnos.php");
    exit();
} else {
    echo '<script>alert("El usuario no existe o las credenciales son incorrectas"); window.location="../VISTA/login_alumnos.html";</script>';
}

$conn->close();
?>  
