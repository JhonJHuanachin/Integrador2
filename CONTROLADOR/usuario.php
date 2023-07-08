<?php
require '../MODELO/conexion.php';

class ControladorUsuario
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function editarUsuario($id, $nombre, $apellido, $correo, $contraseña)
    {
        $contraseñaEncriptada = sha1($contraseña);

        $query = "UPDATE usuario SET nombre = ?, apellido = ?, correo = ?, contraseña = ? WHERE id_usuario = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ssssi", $nombre, $apellido, $correo, $contraseñaEncriptada, $id);
        $stmt->execute();
    }

    public function eliminarUsuario($id)
    {
        $query = "DELETE FROM usuario WHERE id_usuario = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param('s', $id);
        $stmt->execute();

        return $stmt->affected_rows;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_GET['action'] === 'editar') {
        $id = $_POST['id_usuario'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];

        $controlador = new ControladorUsuario($conexion);
        $controlador->editarUsuario($id, $nombre, $apellido, $correo, $contraseña);

        header("Location: ../VISTA/agregar_usuario.php?id=$id");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['action'] === 'eliminar' && isset($_GET['id'])) {
        $id = $_GET['id'];

        $controlador = new ControladorUsuario($conexion);
        $filasEliminadas = $controlador->eliminarUsuario($id);

        if ($filasEliminadas > 0) {
            echo '<p>Usuario eliminado correctamente.</p>';
            header("Location: ../VISTA/agregar_usuario.php");
        } else {
            echo '<p>No se encontró el usuario o no se pudo eliminar.</p>';
        }
    }
}

?>