<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN USUARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Estilos//estilos_usuario.css">
</head>

<body class="bg-primary-subtle">
    <div class="container-fluid" id="contenedor_usuario">
        <div class="container-fluid" id="izquierda">
            <img src="../img/usuarios.png" alt="Imagen Usuario" id="img_usuario">
        </div>
        <div class="container-fluid" id="derecha">
            <h2>Gestion de Incidentes TI</h2>
            <h4>Conoce tu nuevo portal de usuario</h4>
            <p>Reporta, gestiona y supervisa tus trámites y más.
                De una manera más fácil y sencilla.</p>
            <form action="validacion_usuario.php" method="POST" id="form_login">
                <h6>Ingresa tus datos para iniciar sesión.</h6>
                <input type="email" name="Email" required placeholder="USUARIO">
                <input type="password" name="DNI" required placeholder="CONTRASEÑA">
                <br>
                <input type="submit" value="Iniciar sesión">
                <a class="text-center" href="#">Recuperar contraseña</a>
            </form>
            <br>
            <p>¿Necesitas ayuda?</p>
            <a href="" class="btn btn-outline-success">WhatsApp</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>