<?php
session_start();
require '../MODELO/conexion.php';


class ControladorIncidente
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function editarIncidente($id, $categoria, $prioridad, $estado, $descripcion, $id_usuario)
    {
        $query = "UPDATE u_incidentes SET categoria = ?, prioridad = ?, estado = ?, descripcion = ?, id_usuario = ? WHERE id_incidente = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ssssii", $categoria, $prioridad, $estado, $descripcion, $id_usuario, $id);
        $stmt->execute();
    }

    public function eliminarIncidente($id)
    {
        $query = "DELETE FROM u_incidentes WHERE id_incidente = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        return $stmt->affected_rows;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_GET['action'] === 'editar') {
        $id = $_POST['id_incidente'];
        $categoria = $_POST['categoria'];
        $prioridad = $_POST['prioridad'];
        $estado = $_POST['estado'];
        $descripcion = $_POST['descripcion'];
        $id_usuario = $_POST['id_usuario'];

        $controlador = new ControladorIncidente($conexion);
        $controlador->editarIncidente($id, $categoria, $prioridad, $estado, $descripcion, $id_usuario);

        header("Location: ../VISTA/incidencias.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['action'] === 'eliminar' && isset($_GET['id'])) {
        $id = $_GET['id'];

        $controlador = new ControladorIncidente($conexion);
        $filasEliminadas = $controlador->eliminarIncidente($id);

        if ($filasEliminadas > 0) {
            echo '<p>Incidente eliminado correctamente.</p>';
            header("Location: ../VISTA/incidencias.php");
        } else {
            echo '<p>No se encontró el incidente o no se pudo eliminar.</p>';
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categoria = $_POST['categoria'];
    $prioridad = $_POST['prioridad'];
    $estado = $_POST['estado'];
    $descripcion = $_POST['descripcion'];
    $id_usuario = $_POST['id_usuario'];

    if (empty($categoria) || empty($prioridad) || empty($estado) || empty($descripcion) || empty($id_usuario)) {
        echo '<script>alert("TODOS LOS CAMPOS SON OBLIGATORIOS"); window.location="../VISTA/agregar_incidencias.php";</script>';
        exit;
    }

    $consulta = "SELECT id_usuario FROM usuario WHERE id_usuario = '$id_usuario'";
    $resultadoConsulta = mysqli_query($conexion, $consulta);
    $existeUsuario = mysqli_num_rows($resultadoConsulta);

    if ($existeUsuario == 0) {
        echo '<script>alert("EL USUARIO NO EXISTE O NO SE HA ENCONTRADO EN LA BASE DE DATOS"); window.location="../VISTA/agregar_incidencias.php";</script>';
        exit;
    }

    $sql = "INSERT INTO u_incidentes (categoria, prioridad, estado, descripcion, id_usuario) VALUES ('$categoria', '$prioridad', '$estado', '$descripcion', '$id_usuario')";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo '<script>alert("USUARIO AGREGADO CON EXITO"); window.location="../VISTA/incidencias.php";</script>';
        exit;
    } else {
        echo 'ERROR AL AGREGAR USUARIO: ' . mysqli_error($conexion);
    }
}

?>
