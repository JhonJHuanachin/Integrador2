<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h1>EDITAR ADMINISTRADORES</h1>
    </div>

    <div class="container-fluid">
        <?php
        require_once '../Modelo/conexion.php';

        $id = $_GET['id'];

        $query = "SELECT * FROM Administrador WHERE ID_ADMIN = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $nombre = $row['Nombre'];
            $apellido = $row['Apellido'];
            $email = $row['Email'];
            $telefono = $row['Telefono'];

            echo '<form action="../Controlador/controlador_admin.php?action=editar" method="POST">';
            echo '<input type="hidden" name="Id" value="' . $id . '" />';
            echo '<div class="row g-3">';
            echo '<div class="col">';
            echo '<input type="text" class="form-control" placeholder="Nombre" name="Nombre" value="' . $nombre . '" />';
            echo '</div>';
            echo '<div class="col">';
            echo '<input type="text" class="form-control" placeholder="Apellido" name="Apellido" value="' . $apellido . '" />';
            echo '</div>';
            echo '</div>';
            echo '<br />';
            echo '<div class="row g-3">';
            echo '<div class="col">';
            echo '<input type="email" class="form-control" placeholder="Email" name="Email" value="' . $email . '" />';
            echo '</div>';
            echo '<div class="col">';
            echo '<input type="text" class="form-control" placeholder="Telefono" name="Telefono" value="' . $telefono . '" />';
            echo '</div>';
            echo '</div>';
            echo '<br />';
            echo '<button type="submit" class="btn btn-primary">Guardar</button>';
            echo '</form>';
        } else {
            echo '<p>No se encontró el administrador.</p>';
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>