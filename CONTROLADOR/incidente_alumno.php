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

    public function agregarIncidente($categoria, $telefono, $descripcion, $imagen)
    {
        $query = "INSERT INTO u_incidentes (categoria, telefono, descripcion, imagen) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ssss", $categoria, $telefono, $descripcion, $imagen);
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

$controlador = new ControladorIncidente($conexion);

// Obtener los datos enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoria = $_POST["categoria"];
    $telefono = $_POST["telefono"];
    $descripcion = $_POST["descripcion"];
    
    // Procesar la imagen si se ha subido
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
        $imagen = $_FILES["imagen"]["name"];
        $imagen_temp = $_FILES["imagen"]["tmp_name"];
      
    } else {
        $imagen = null;
    }
    

    if ($controlador->agregarIncidente($categoria, $telefono, $descripcion, $imagen)) {
       
        header("Location: ../VISTA/incidencias_alumnos.php");
        echo '<script>alert("El incidente se ha agregado correctamente.");</script>';
    } else {

        echo "Error al agregar el incidente.";
    }
}
?>
