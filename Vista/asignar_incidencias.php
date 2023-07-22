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
                <a class="nav-link" href="incidencias_admin.php">
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
            <li class="nav-item">
                <a class="nav-link" href="asignar_incidencias.php">
                <i class="fas fa-handshake"></i>
                    <span>Asignar Incidente</span></a>
            </li
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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Asignar incidencias</h6>
                        </div>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>N° Incidentes</th>
                                    <th>Categoria</th>
                                    <th>Prioridad</th>
                                    <th>Estado</th>
                                    <th>Correo</th>
                                    <th>Asignar</th>
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
                                    echo "<td>";
                                    if ($row['estado'] == 'Abierto') {
                                        echo "<i class='fas fa-circle text-success' title='Proceso Abierto'></i>";
                                    } elseif ($row['estado'] == 'En proceso') {
                                        echo "<i class='fas fa-circle text-warning' title='En Proceso'></i>";
                                    } elseif ($row['estado'] == 'Cerrado') {
                                        echo "<i class='fas fa-circle text-danger' title='Proceso Cerrado'></i>";
                                    } else {
                                        echo "<i class='fas fa-question-circle' title='Estado desconocido'></i>";
                                    }
                                    echo "</td>";
                                    echo "<td>" . $row['c_usuario'] . "</td>";
                                    echo "<td>";
                                    echo "<div class='btn-group'>";
                                  
                                    echo "<button class='btn btn-info btn-sm' data-toggle='modal' data-target='#asignarModal-" . $row['id_incidente'] . "'>Asignar</button>";
                                    echo "</div>";
                                    echo "</td>";
                                    echo "</tr>";
                     
                                    echo "<div class='modal fade' id='asignarModal-" . $row['id_incidente'] . "' tabindex='-1' role='dialog' aria-labelledby='asignarModalLabel-" . $row['id_incidente'] . "' aria-hidden='true'>";
                                    echo "<div class='modal-dialog' role='document'>";
                                    echo "<div class='modal-content'>";
                                    echo "<div class='modal-header'>";
                                    echo "<h5 class='modal-title' id='asignarModalLabel-" . $row['id_incidente'] . "'>Asignar Incidente</h5>";
                                    echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                                    echo "<span aria-hidden='true'>&times;</span>";
                                    echo "</button>";
                                    echo "</div>";
                                    echo "<div class='modal-body'>";
                                    echo "<form action='../CONTROLADOR/incidente.php?action=asignar' method='POST'>";
                                    echo "<input type='hidden' name='id_incidente' value='" . $row['id_incidente'] . "' />";
                                    echo "<div class='form-group'>";
                                    echo "<label for='id_usuario_asignado'>Asignar a:</label>";
                                    echo "<select class='form-control' id='id_usuario_asignado' name='id_usuario_asignado'>";
                                   
                                    $queryUsuarios = "SELECT id_admin, nombre_a FROM administrador";
                                    $resultadoUsuarios = mysqli_query($conexion, $queryUsuarios);
                                    if ($resultadoUsuarios) {
                                        while ($usuario = mysqli_fetch_assoc($resultadoUsuarios)) {
                                            echo "<option value='" . $usuario['id_admin'] . "'>" . $usuario['nombre_a'] . "</option>";
                                        }
                                    }

                                    echo "</select>";
                                    echo "</div>";
                                    echo "<div class='modal-footer'>";
                                    echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>";
                                    echo "<button type='submit' class='btn btn-primary'>Asignar</button>";
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

                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Todos los derechos reservados © Copyright 2023</span>
                        </div>
                    </div>
                </footer>
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