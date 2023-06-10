<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VER INCIDENTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Estilos/estilos_administrador.css" />
</head>

<body>
    <div class="container-fluid" id="filtros">
        <br>
        <form class="form-control">
            <h5>FILTROS: </h5>
            <div class="row">
                <div class="col">
                    <label for="categoria">Categoría:</label>
                    <select class="form-select" id="categoria" name="categoria">
                        <option value="1">Categoría 1</option>
                        <option value="2">Categoría 2</option>
                        <option value="3">Categoría 3</option>
                    </select>
                </div>
                <div class="col">
                    <label for="estado">Estado:</label>
                    <select class="form-select" id="estado" name="estado">
                        <option value="1">Abierto</option>
                        <option value="2">En proceso</option>
                        <option value="3">Cerrado</option>
                    </select>
                </div>
                <div class="col">
                    <label for="prioridad">Prioridad:</label>
                    <select class="form-select" id="prioridad" name="prioridad">
                        <option value="1">Alta</option>
                        <option value="2">Media</option>
                        <option value="3">Baja</option>
                    </select>
                </div>
                <div class="col">
                    <br>
                    <button type="submit" class="btn btn-outline-light">Aplicar</button>
                </div>
            </div>
        </form>
    </div>
    <br>
    <div id="tabla-incidentes" class="container-fluid">
        <h5>TABLA DE INCIDENTES</h5>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">PRIORIDAD</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">DESCRIPCION</th>
                    <th scope="col">USUARIO</th>
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
                    echo "<td>" . $row['Id_usuario'] . "</td>";
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