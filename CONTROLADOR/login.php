<?php
session_start();
require '../MODELO/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmarContraseña = $_POST['confirmar_contraseña'];

    if (empty($nombre) || empty($apellido) || empty($correo) || empty($contraseña) || empty($confirmarContraseña)) {
        echo 'Todos los campos son obligatorios';
        exit;
    }

    if ($contraseña !== $confirmarContraseña) {
        echo 'Las contraseñas no coinciden';
        exit;
    }

    $sql = "SELECT id_usuario FROM usuario WHERE correo = '$correo'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        echo 'El correo ya está registrado';
        exit;
    }

    $contraseñaEncriptada = sha1($contraseña);

    $sql = "INSERT INTO usuario (nombre, apellido, correo, contraseña) VALUES ('$nombre', '$apellido', '$correo', '$contraseñaEncriptada')";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        header("Location: ../VISTA/login_alumnos.html");
        exit;
    } else {
        echo 'Error al registrar el usuario: ' . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>
