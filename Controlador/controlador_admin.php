<?php
require_once '../Modelo/conexion.php';
require_once '../Vista/lista_admin.php';

class ControladorAdmin
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function agregarRegistro($nombre, $apellido, $email, $telefono)
    {
        $query = "INSERT INTO Administrador (nombre, apellido, email, telefono) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$nombre, $apellido, $email, $telefono]);
    }

    public function editarRegistro($id, $nombre, $apellido, $email, $telefono)
    {
        $query = "UPDATE Administrador SET nombre = ?, apellido = ?, email = ?, telefono = ? WHERE ID_ADMIN = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$nombre, $apellido, $email, $telefono, $id]);
    }

    public function eliminarRegistro($id)
    {
        $query = "DELETE FROM Administrador WHERE ID_ADMIN = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_GET['action'] === 'agregar') {
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['Email'];
        $telefono = $_POST['Telefono'];

        $controlador = new ControladorAdmin();
        $controlador->agregarRegistro($nombre, $apellido, $email, $telefono);

        header("Location: ../Vista/lista_admin.php");
        exit();
    } elseif ($_GET['action'] === 'editar') {
        $id = $_POST['Id'];
        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $email = $_POST['Email'];
        $telefono = $_POST['Telefono'];

        $controlador = new ControladorAdmin();
        $controlador->editarRegistro($id, $nombre, $apellido, $email, $telefono);

        header("Location: ../Vista/lista_admin.php");
        exit();
    }  elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'eliminar' && isset($_GET['Id'])) {
        $id = $_GET['Id'];
    
        $controlador = new ControladorAdmin();
        $controlador->eliminarRegistro($id);
    
        header("Location: ../Vista/lista_admin.php");
        exit();
    }
}
    ?>
    

