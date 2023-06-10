<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PORTAL ADMINISTRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Estilos/estilos_administrador.css" />
</head>

<body>
    <div class="row">
        <div class="col-3">
            <div class="container-fluid bg-dark" id="lateral-izquierda">
                <h1 class="display-6 text-white">SISTEMA DE INCIDENCIAS</h1>
                <div class="container-fluid" id="icono">
                    <img src="../img/user.png" alt="USER" />
                    <p class="text-white"></p>
                </div>
                <nav class="navbar bg-dark" data-bs-theme="dark">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ver_incidente.php">VER INCIDENCIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agregar_incidente.php">REPORTAR INCIDENCIAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="agregar_usuario.php">ADMINISTRACION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">REPORTES</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-9">
            <div class="container-fluid" id="lateral-derecha">
                <br>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Dashboard</span>
                    </div>
                </nav>
                <br>
                <div id="asignado">
                    <h5>Mis incidencias</h5>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">CATEGORIA</th>
                                <th scope="col">PRIORIDAD</th>
                                <th scope="col">ESTADO</th>
                                <th scope="col">DESCRIPCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once '../Modelo/conexion.php';
                            $query = "SELECT * FROM Incidentes";
                            $stmt = $conn->query($query);
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row['Id_incidentes'] . "</td>";
                                echo "<td>" . $row['Categoria'] . "</td>";
                                echo "<td>" . $row['Prioridad'] . "</td>";
                                echo "<td>" . $row['Estado'] . "</td>";
                                echo "<td>" . $row['Descripcion'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
                        </tbody>
                    </table>
                </div>
                <div id="sin_asignar">
                    <h5>Incidencias sin asignar</h5>
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">CATEGORIA</th>
                                <th scope="col">PRIORIDAD</th>
                                <th scope="col">ESTADO</th>
                                <th scope="col">DESCRIPCION</th>
                                <th scope="col">OPCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once '../Modelo/conexion.php';
                            $query = "SELECT * FROM Incidentes";
                            $stmt = $conn->query($query);
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row['Id_incidentes'] . "</td>";
                                echo "<td>" . $row['Categoria'] . "</td>";
                                echo "<td>" . $row['Prioridad'] . "</td>";
                                echo "<td>" . $row['Estado'] . "</td>";
                                echo "<td>" . $row['Descripcion'] . "</td>";
                                echo "<td><button class='btn btn-outline-light btn-sm'>Atender</button></td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>