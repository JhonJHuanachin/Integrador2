<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SISTEMA DE GESTION DE INCIDENCIAS</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_admin.php">
        <div class="sidebar-brand-text mx-3">GESTION DE INCIDENCIAS</div>
      </a>
      <hr class="sidebar-divider my-0" />
      <li class="nav-item active">
        <a class="nav-link" href="index_admin.php"> <span>DASHBOARD</span></a>
      </li>
      <hr class="sidebar-divider" />
      <div class="sidebar-heading">Herramientas</div>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-eye"></i>
          <span>VER INCIDENCIAS</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="agregar_incidencias.php">
          <i class="fas fa-fw fa-exclamation-circle"></i>
          <span>REPORTAR INCIDENCIAS</span>
        </a>
      </li>
      <hr class="sidebar-divider" />
      <div class="sidebar-heading">Administrador</div>
      <li class="nav-item">
        <a class="nav-link" href="agregar_alumnos.php">
          <i class="fas fa-fw fa-user-plus"></i>
          <span>Usuario</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block" />
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg" />
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
          <div class="container-fluid">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Filtros</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <form action="../CONTROLADOR/controlador_incidente.php?action=filtrar" method="GET">
                    <table class="table table-bordered" id="filtroTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Categoría</th>
                          <th>Prioridad</th>
                          <th>Estado</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <select class="form-control" name="categoria">
                              <option value="">Todos</option>
                              <option value="Hardware">Hardware</option>
                              <option value="Software académico">Software académico</option>
                              <option value="Redes y conectividad">Redes y conectividad</option>
                              <option value="Cuentas y acceso">Cuentas y acceso</option>
                              <option value="Plataformas y sistemas académico">Plataformas y sistemas académico</option>
                              <option value="Otros">Otros</option>
                            </select>
                          </td>
                          <td>
                            <select class="form-control" name="prioridad">
                              <option value="">Todos</option>
                              <option value="Baja">Baja</option>
                              <option value="Media">Media</option>
                              <option value="Alta">Alta</option>
                            </select>
                          </td>
                          <td>
                            <select class="form-control" name="estado">
                              <option value="">Todos</option>
                              <option value="En proceso">En proceso</option>
                              <option value="Solucionado">Solucionado</option>
                              <option value="Cerrado">Cerrado</option>
                            </select>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                  </form>
                </div>
              </div>
            </div>

            <div class="container-fluid">
              <a href="reporte.php" class="btn btn-outline-info btn-sm" download>
                <i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte PDF
              </a>
              <a href="excel.php" class="btn btn-outline-success btn-sm" download>
                <i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte Excel
              </a>
            </div>
            <br>

            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Tabla incidentes
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">

                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>N° Incidentes</th>
                        <th>Categoria</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                        <th>Descripcion</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      require_once '../MODELO/conexion.php';
                      $query = "SELECT * FROM u_incidentes";
                      $resultado = mysqli_query($conexion, $query);
                      if (!$resultado) {
                        die('Error al ejecutar la consulta: ' . mysqli_error($conexion));
                      }
                      while ($row = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_incidente'] . "</td>";
                        echo "<td>" . $row['categoria'] . "</td>";
                        echo "<td>" . $row['prioridad'] . "</td>";
                        echo "<td>" . $row['estado'] . "</td>";
                        echo "<td>" . $row['descripcion'] . "</td>";
                        echo "<td>" . $row['c_usuario'] . "</td>";
                        echo "<td>";
                        echo "<div class='btn-group'>";
                        echo "<button class='btn btn-primary btn-sm mr-2' data-toggle='modal' data-target='#editarModal-" . $row['id_incidente'] . "'>Editar</button>";
                        echo "<a href='../CONTROLADOR/incidente.php?action=eliminar&id=" . $row['id_incidente'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"¿Estás seguro de que deseas eliminar esta incidencia?\")'>Eliminar</a>";
                        echo "</div>";
                        echo "</td>";
                        echo "</tr>";

                        echo "<div class='modal fade' id='editarModal-" . $row['id_incidente'] . "' tabindex='-1' role='dialog' aria-labelledby='editarModalLabel-" . $row['id_incidente'] . "' aria-hidden='true'>";
                        echo "<div class='modal-dialog' role='document'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='editarModalLabel-" . $row['id_incidente'] . "'>Editar Incidente</h5>";
                        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                        echo "<span aria-hidden='true'>&times;</span>";
                        echo "</button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";
                        echo "<form action='../CONTROLADOR/incidente.php?action=editar' method='POST'>";
                        echo "<input type='hidden' name='id_incidente' value='" . $row['id_incidente'] . "' />";
                        echo "<div class='form-group'>";

                        echo "<label for='categoria'>Categoría:</label>";
                        echo "<select class='form-select form-control' id='categoria' name='categoria'>";
                        echo "<option value=''>Todos</option>";
                        echo "<option value='Hardware'" . ($row['categoria'] === 'Hardware' ? ' selected' : '') . ">Hardware</option>";
                        echo "<option value='Software académico'" . ($row['categoria'] === 'Software academico' ? ' selected' : '') . ">Software académico</option>";
                        echo "<option value='Redes y conectividad'" . ($row['categoria'] === 'Redes y conectividad' ? ' selected' : '') . ">Redes y conectividad</option>";
                        echo "<option value='Cuentas y acceso'" . ($row['categoria'] === 'Cuentas y acceso' ? ' selected' : '') . ">Cuentas y acceso</option>";
                        echo "<option value='Plataformas y sistemas académico'" . ($row['categoria'] === 'Plataformas y sistemas academico' ? ' selected' : '') . ">Plataformas y sistemas académico</option>";
                        echo "<option value='Otros'" . ($row['categoria'] === 'Otros' ? ' selected' : '') . ">Otros</option>";
                        echo "</select>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='prioridad'>Prioridad:</label>";
                        echo "<select class='form-select form-control' id='prioridad' name='prioridad'>";
                        echo "<option value=''>Todos</option>";
                        echo "<option value='Alta'" . ($row['prioridad'] === 'Alta' ? ' selected' : '') . ">Alta</option>";
                        echo "<option value='Media'" . ($row['prioridad'] === 'Media' ? ' selected' : '') . ">Media</option>";
                        echo "<option value='Baja'" . ($row['prioridad'] === 'Baja' ? ' selected' : '') . ">Baja</option>";
                        echo "</select>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='estado'>Estado:</label>";
                        echo "<select class='form-select form-control' id='estado' name='estado'>";
                        echo "<option value=''>Todos</option>";
                        echo "<option value='Abierto'" . ($row['estado'] === 'Abierto' ? ' selected' : '') . ">Abierto</option>";
                        echo "<option value='En proceso'" . ($row['estado'] === 'En proceso' ? ' selected' : '') . ">En proceso</option>";
                        echo "<option value='Cerrado'" . ($row['estado'] === 'Cerrado' ? ' selected' : '') . ">Cerrado</option>";
                        echo "</select>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='descripcion'>Descripción:</label>";
                        echo "<input type='text' class='form-control' id='descripcion' name='descripcion' value='" . $row['descripcion'] . "'>";
                        echo "</div>";
                        echo "<div class='form-group'>";
                        echo "<label for='c_usuario'>Correo usuario:</label>";
                        echo "<select class='form-control' id='c_usuario' name='c_usuario'>";
                        $query_usuarios = "SELECT correo FROM usuario";
                        $resultado_usuarios = mysqli_query($conexion, $query_usuarios);
                        while ($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)) {
                          echo '<option value="' . $row_usuarios['correo'] . '"' . ($row_usuarios['correo'] === $row['c_usuario'] ? ' selected' : '') . '>' . $row_usuarios['correo'] . '</option>';
                        }
                        echo "</select>";
                        echo "</div>";



                        echo "<div class='modal-footer'>";
                        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>";
                        echo "<button type='submit' class='btn btn-primary'>Guardar cambios</button>";
                        echo "</div>";
                        echo "</form>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos los derechos reservados © Copyright 2023</span>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            ¿Quieres cerrar sesion?
          </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Selecciona " Cerrar " para finalizar la sesion
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">
            Cancelar
          </button>
          <a class="btn btn-primary" href="login_admin.html">Cerrar sesion</a>
        </div>
      </div>
    </div>
  </div>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/sb-admin-2.min.js"></script>
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>