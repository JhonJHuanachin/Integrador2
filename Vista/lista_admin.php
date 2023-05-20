<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <h1>LISTA DE ADMINISTRADORES</h1>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <div class="container-fluid" id="fila-inferior">
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Email</th>
          <th scope="col">Telefono</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once '../Modelo/conexion.php';
        require_once '../Controlador/controlador_admin.php';
        $query = "SELECT * FROM Administrador";
        $stmt = $conn->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>";
          echo "<td>" . $row['ID_ADMIN'] . "</td>";
          echo "<td>" . $row['Nombre'] . "</td>";
          echo "<td>" . $row['Apellido'] . "</td>";
          echo "<td>" . $row['Email'] . "</td>";
          echo "<td>" . $row['Telefono'] . "</td>";
          echo "<td><button onclick=\"editarRegistro(" . $row['ID_ADMIN'] . ")\">EDITAR</button>";
          echo "<button onclick=\"eliminarRegistro(" . $row['ID_ADMIN'] . ")\">ELIMINAR</button></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="../Vista/agregar_admin.php">AGREGAR</a></button>
    <button type="button" class="btn btn-danger"><a class="text-decoration-none text-white" href="../Vista/Index.php">REGRESAR</a></button>
  </div>

  <script>
    function eliminarRegistro(id) {
      if (confirm("¿DESEA ELIMINAR ESTE ADMINISTRADOR?")) {
        window.location.href = '../Controlador/controlador_admin.php?action=eliminar&id=' + id;
      }
    }

    function editarRegistro(id) {
      window.location.href = "../Vista/editar_admin.php?id=" + id;
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>