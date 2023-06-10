<?php
require_once '../Modelo/conexion.php';

class ControladorUsuario
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function agregarRegistro($nombre, $email, $telefono, $dni, $contraseña)
    {
        $query = "INSERT INTO Usuario (Nombre, Email, Telefono, DNI, Contraseña) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$nombre, $email, $telefono, $dni, $contraseña]);
    }

    public function editarRegistro($id, $nombre, $email, $telefono, $dni, $contraseña)
    {
        $query = "UPDATE Usuario SET Nombre = ?, Email = ?, Telefono = ?, DNI = ?, Contraseña = ? WHERE Id_usuario = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$nombre, $email, $telefono, $dni, $contraseña, $id]);
    }

    public function eliminarRegistro($id)
    {
        $query = "DELETE FROM Usuario WHERE Id_usuario = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
    }

    public function obtenerRegistros()
    {
        $query = "SELECT * FROM Usuario";
        $stmt = $this->conn->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    if ($_GET['action'] === 'eliminar' && isset($_GET['id'])) {
        $id = $_GET['id'];

        $controlador = new ControladorUsuario();
        $controlador->eliminarRegistro($id);

        header("Location: ../Vista_admin/agregar_usuario.php");
        exit();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action'])) {
    if ($_GET['action'] === 'agregar') {
        $nombre = $_POST['Nombre'];
        $email = $_POST['Email'];
        $telefono = $_POST['Telefono'];
        $dni = $_POST['DNI'];
        $contraseña = $_POST['Contraseña'];

        $controlador = new ControladorUsuario();
        $controlador->agregarRegistro($nombre, $email, $telefono, $dni, $contraseña);

        header("Location: ../Vista_admin/agregar_usuario.php");
        exit();
    } elseif ($_GET['action'] === 'editar') {
        $id = $_POST['Id_usuario'];
        $nombre = $_POST['Nombre'];
        $email = $_POST['Email'];
        $telefono = $_POST['Telefono'];
        $dni = $_POST['DNI'];
        $contraseña = $_POST['Contraseña'];

        $controlador = new ControladorUsuario();
        $controlador->editarRegistro($id, $nombre, $email, $telefono, $dni, $contraseña);

        header("Location: ../Vista_admin/agregar_usuario.php?id=$id");
        exit();
    }
}
