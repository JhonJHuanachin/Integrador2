<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDITAR USUARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 text-white">EDITAR USUARIO</span>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <?php
        require_once '../Modelo/conexion.php';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $query = "SELECT * FROM Usuario WHERE Id_usuario = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                $nombre = $row['Nombre'];
                $email = $row['Email'];
                $telefono = $row['Telefono'];
                $dni = $row['DNI'];
                $contraseña = $row['Contraseña'];

                echo '<form action="../Controlador/controlador_usuario.php?action=editar" method="POST">';
                echo '<input type="hidden" name="Id_usuario" value="' . $id . '" />';
                echo '<div class="row g-3">';
                echo '<div class="col">';
                echo '<input type="text" class="form-control" placeholder="Nombre" name="Nombre" value="' . $nombre . '" />';
                echo '</div>';
                echo '<div class="col">';
                echo '<input type="email" class="form-control" placeholder="Email" name="Email" value="' . $email . '" />';
                echo '</div>';
                echo '</div>';
                echo '<br />';
                echo '<div class="row g-3">';
                echo '<div class="col">';
                echo '<input type="text" class="form-control" placeholder="Telefono" name="Telefono" value="' . $telefono . '" />';
                echo '</div>';
                echo '<div class="col">';
                echo '<input type="text" class="form-control" placeholder="DNI" name="DNI" value="' . $dni . '" />';
                echo '</div>';
                echo '</div>';
                echo '<br />';
                echo '<div class="row g-3">';
                echo '<div class="col">';
                echo '<input type="password" class="form-control" placeholder="Contraseña" name="Contraseña" value="' . $contraseña . '" />';
                echo '</div>';
                echo '</div>';
                echo '<br />';
                echo '<input type="submit" class="btn btn-outline-dark" value="GUARDAR">';
                echo '</form>';
            } 
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-3lXvQ4bb6CQewriM/Yx7kmj9ANZSSzHD48YubP86IMZ0rFtezow3eOgwtl/5S6F+" crossorigin="anonymous"></script>
</body>

</html>