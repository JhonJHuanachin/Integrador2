<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    if ($usuario == "admin" && $contrasena == "admin") {
        header("Location: index.php");
        exit();
    } else {
        $mensajeError = "DATOS INCORRECTOS";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container" id="head">
                <div class="container-fluid">
                    <h1>GESTION DE INCIDENCIAS TI</h1>
                </div>
            </div>
        </nav>
    </div>
    <br>
    <div class="container-fluid" id="principal">
        <div id="imagenTi">
            <img src="../img/login1.png" class="rounded mx-auto d-block" alt="Perfil">
        </div>
        <div class="container-fluid" id="Dlogin">
        <h3>LOGIN USER</h3>
            <?php if (isset($mensajeError)) { ?>
                <p style="color: black;"><?php echo $mensajeError; ?></p>
            <?php } ?>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <input type="text" name="usuario" id="usuario" required placeholder="USUARIO">
                <input type="password" name="contrasena" id="contrasena" required placeholder="CONTRASEÑA">
                <input class="btn btn-outline-primary" type="submit" value="INGRESAR">
            </form>
        </div>
    </div>
</body>
<footer>
    <p>Todos los derechos reservados</p>
</footer>

</html>