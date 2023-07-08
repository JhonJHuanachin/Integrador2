<!DOCTYPE html>
<html lang="en">
<?php
require_once "../MODELO/conexion.php";
session_start();
if (!isset($_SESSION['id_usuario'])) {
    exit();
}
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            </a>
            <hr class="sidebar-divider" />
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-home"></i>
                    <span>INICIO</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>HORARIO</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-book"></i>
                    <span>CURSO</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-dollar-sign"></i>
                    <span>PAGOS</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>SERVICIOS</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="incidencias_alumnos.php">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>TRÁMITES</span>
                </a>
            </li>

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Hola, <?php echo $_SESSION['nombre']; ?></span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cambio de contraseña
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

                <div id="carouselExampleDark" class="carousel carousel-dark slide" style="max-width: 80%; margin: 0 auto;">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/salones.jpg"  class="rounded mx-auto d-block">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white" style="font-weight: bold;">Salones</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../img/lab.jpg"  class="rounded mx-auto d-block">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white" style="font-weight: bold;">Laboratorios</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../img/cafeteria.jpg"  class="rounded mx-auto d-block">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white" style="font-weight: bold;">Cafeteria</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../img/simulador.jpg"  class="rounded mx-auto d-block">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white" style="font-weight: bold;">Simulador</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <br>
                <hr class="sidebar-divider" />
                <br>
                <div>
                    <div class="container text-center">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="mr-2 align-self-center"><?php echo strftime('%A, %d de %B de %Y'); ?></h5>
                                <button class="btn btn-outline-primary btn-sm">Ir a horario</button>
                            </div>
                            <div class="col">
                                <h5 class="mr-2 align-self-center">Trámites</h5>
                                <a href="incidencias_alumnos.php" class="btn btn-outline-primary btn-sm">Ir a trámites</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr class="sidebar-divider" />
                <br>
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h6 class="card-title">Avance plan de estudio</h6>
                                        <button class="mx-auto d-block" style="background-color: white; width: 200px; height: 100px;">
                                            <i class="fas fa-book-open"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h6 class="card-title">Información institucional</h6>
                                        <button class="mx-auto d-block" style="background-color: white; width: 200px; height: 100px;">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h6 class="card-title">Record de notas</h6>
                                        <button class=" mx-auto d-block" style="background-color: white; width: 200px; height: 100px;">
                                            <i class="fas fa-chart-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr class="sidebar-divider" />
            <br>  
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
                        <a class="btn btn-primary" href="login_alumnos.html">Cerrar sesion</a>
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