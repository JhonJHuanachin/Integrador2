<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <div class="container-fluid" id="contenedor">
    <div class="container-fluid bg-dark" id="columna-izquierda">
      <div class="container-fluid">
        <h1 class="display-6 text-white">SISTEMA DE INCIDENCIAS</>
      </div>
      <div class="container-fluid" id="icono">
        <img src="../img/user.png" alt="USER" />
        <p>User</p>
      </div>
      <nav class="navbar bg-dark" data-bs-theme="dark">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NUEVO REGISTRO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ASIGNAR INCIDENTES</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              LISTAR
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../Vista/lista_admin.php">ADMINISTRADOR</a></li>
              <li><a class="dropdown-item" href="#">INCIDENTES</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

    <div class="container-fluid" id="columna-derecha">
      <div class="container-fluid" id="fila-superior">
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">BIENVENIDO</span>
          </div>
        </nav>
        <div class="container-fluid">
          <br>
          <h4>TABLA DE INCIDENCIAS</h4>
        </div>
        <div class="container-fluid">
          <select class="form-select form-select-xs mb-3" aria-label=".form-select-lg example">
            <option selected>FILTRAR</option>
            <option value="1">PRIORIDAD</option>
            <option value="2">ESTADO</option>
          </select>
        </div>
      </div>
      <div class="container-fluid " id="fila-inferior">
        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">TITULO</th>
              <th scope="col">CATEGORIA</th>
              <th scope="col">DESCRIPCION</th>
              <th scope="col">PRIORIDAD</th>
              <th scope="col">ARCHIVOS</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php
            require_once '../Modelo/conexion.php';
            $query = "SELECT * FROM Incidentes ";
            $stmt = $conn->query($query);
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td>" . $row['ID_INCIDENTE'] . "</td>";
              echo "<td>" . $row['Titulo'] . "</td>";
              echo "<td>" . $row['Categoria'] . "</td>";
              echo "<td>" . $row['Descripcion'] . "</td>";
              echo "<td>" . $row['Prioridad'] . "</td>";
              echo "<td>" . $row['Archivos'] . "</td>";
              echo "<td><button onclick=\"editarRegistro(" . $row['ID_INCIDENTE'] . ")\">EDITAR</button> ";
              echo "<button onclick=\"eliminarRegistro(" . $row['ID_INCIDENTE'] . ")\">ELIMINAR</button></td>";
              echo "</tr>";
            }
            echo "</table>";
            ?>
          </tbody>
        </table>
        <div class="container-fluid">
          <button type="button" class="btn btn-primary">AGREGAR</button>
        </div>
      </div>
    </div>

  </div>
</body>
<footer>
  <p>Todos los derechos reservados</p>
</footer>

</html>