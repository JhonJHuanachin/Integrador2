<!DOCTYPE html>
<html lang="en">
<head>
    <title>AGREGAR USUARIO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <br>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 text-white">AGREGAR USUARIO</span>
        </div>
    </nav>
    <br>
    <div class="form-control mx-auto p-3 " style="width: 50%;">
        <form id="form_usuario"action="../Controlador/controlador_usuario.php?action=agregar" method="POST" enctype="multipart/form-data">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="Nombre" id="nombre" class="form-control" required><br>
            <label for="email">Email:</label>
            <input type="email" name="Email" id="email" class="form-control" required><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="Telefono" id="telefono" class="form-control" required><br>
            <label for="dni">DNI:</label>
            <input type="text" name="DNI" id="dni" class="form-control" required><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="Contraseña" id="contrasena" class="form-control" required><br>
            <input type="submit" value="Agregar" class="btn btn-outline-dark">
        </form>
    </div>
    <br>
    <div class="container-fluid ">
        <table class="table table-dark table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../Modelo/conexion.php';
                require_once '../Controlador/controlador_usuario.php';

                $controlador = new ControladorUsuario();
                $usuarios = $controlador->obtenerRegistros();

                foreach ($usuarios as $usuario) {
                    echo '<tr>';
                    echo '<td>' . $usuario['Nombre'] . '</td>';
                    echo '<td>' . $usuario['Email'] . '</td>';
                    echo '<td>' . $usuario['Telefono'] . '</td>';
                    echo '<td>' . $usuario['DNI'] . '</td>';
                    echo '<td>' . $usuario['Contraseña'] . '</td>';
                    echo '<td><a href="../Vista_admin/editar_usuario.php?id=' . $usuario['Id_usuario'] . '">Editar</a> | <a href="../Controlador/controlador_usuario.php?action=eliminar&id=' . $usuario['Id_usuario'] . '">Eliminar</a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>