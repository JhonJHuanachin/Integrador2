<!DOCTYPE html>
<html lang="en">
<?php
require_once "../MODELO/conexion.php";
?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SISTEMA DE GESTION DE INCIDENCIAS</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">GESTION DE INCIDENCIAS</div>
      </a>
      <hr class="sidebar-divider my-0" />
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span>DASHBOARD</span></a>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Earnings (Monthly)
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        $40,000
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Earnings (Annual)
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        $215,000
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                        Tasks
                      </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            50%
                          </div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Pending Requests
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        18
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">PRIORIDADES INCIDENTES</h6>
                </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load("current", {
                    packages: ["corechart"]
                  });
                  google.charts.setOnLoadCallback(drawChartPrioridades);

                  function drawChartPrioridades() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Prioridad');
                    data.addColumn('number', 'Cantidad');

                    <?php
                    $sql = "SELECT prioridad, COUNT(*) as cantidad FROM u_incidentes GROUP BY prioridad";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                      $prioridad = $row['prioridad'];
                      $cantidad = $row['cantidad'];
                      echo "data.addRow(['$prioridad', $cantidad]);";
                    }
                    ?>
                    var options = {
                      title: '',
                      is3D: true,
                      pieSliceText: 'value',
                      colors: ['#BA68C8', '#81D4FA', '#536DFE']
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('piechartPrioridades'));
                    chart.draw(data, options);
                  }
                </script>
                <div id="piechartPrioridades"></div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">ESTADOS INCIDENTES</h6>
                </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load("current", {
                    packages: ["corechart"]
                  });
                  google.charts.setOnLoadCallback(drawChartEstados);

                  function drawChartEstados() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Estado');
                    data.addColumn('number', 'Cantidad');

                    <?php
                    $sql = "SELECT estado, COUNT(*) as cantidad FROM u_incidentes GROUP BY estado";
                    $resultado = mysqli_query($conexion, $sql);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                      $estado = $row['estado'];
                      $cantidad = $row['cantidad'];
                      echo "data.addRow(['$estado', $cantidad]);";
                    }
                    ?>
                    var options = {
                      title: 'ESTADO DE INCIDENTES',
                      is3D: true,
                      pieSliceText: 'value',
                      colors: ['#F44336', '#81C784', '#FFCA28']
                    };
                    var chart = new google.visualization.PieChart(document.getElementById('piechartEstados'));
                    chart.draw(data, options);
                  }
                </script>
                <div id="piechartEstados"></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">CATEGORIAS</h6>
                </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load('current', {
                    'packages': ['bar']
                  });
                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {
                    var data = new google.visualization.arrayToDataTable([
                      ['Categoría', 'Cantidad'],
                      <?php
                      $sql = "SELECT categoria, COUNT(*) as cantidad FROM u_incidentes GROUP BY categoria";
                      $resultado = mysqli_query($conexion, $sql);

                      while ($row = mysqli_fetch_assoc($resultado)) {
                        $categoria = $row['categoria'];
                        $cantidad = $row['cantidad'];
                        echo "['$categoria', $cantidad],";
                      }
                      ?>
                    ]);
                    var options = {
                      title: '',
                      width: '100%',
                      height: 400,
                      legend: {
                        position: 'none'
                      },
                      chart: {
                        title: '',
                        subtitle: ' Cantidad por categoría'
                      },
                      bars: 'horizontal',
                      axes: {
                        x: {
                          0: {
                            side: 'top',
                            label: 'Cantidad'
                          }
                        }
                      },
                      bar: {
                        groupWidth: '90%'
                      },
                      colors: ['#78909C']
                    };
                    var chart = new google.charts.Bar(document.getElementById('chart_div'));
                    chart.draw(data, google.charts.Bar.convertOptions(options));
                  }
                </script>
                <div id="chart_div" style="width: 100%; height: 450px;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="row">
            <div class="col text-center">
              <h5>¡Descarga tu APP!</h5>
              <button class="btn btn-outline-dark btn-sm"><i class="fab fa-google-play"></i> Google Play</button>
              <button class="btn btn-outline-dark btn-sm"><i class="fab fa-app-store"></i> App Store</button>
            </div>
            <div class="col text-center">
              <h5>Otras plataformas</h5>
              <button class="btn btn-outline-danger btn-sm"><i class="far fa-envelope"></i> Outlook</button>
              <button class="btn btn-outline-primary btn-sm"><i class="fab fa-microsoft"></i> Microsoft Office 365</button>
            </div>
            <div class="col text-center">
              <h5>Canales de ayuda</h5>
              <button class="btn btn-outline-success btn-sm"><i class="fab fa-whatsapp"></i>WhatsApp</button>
            </div>
          </div>
        </div>
        <hr class="sidebar-divider" />
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos los derechos reservados &copy; Copyright 2023</span>
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