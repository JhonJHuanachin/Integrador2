<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN ADMINISTRADOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Estilos/estilos_administrador.css">

</head>

<body id="body_admin">
    <div id="contenedor_admin">
        <div class="container-fluid" id="derecha">          
            <br>
            <form action="" method="POST" id="form_loginadmin">
            <h2>ADMINISTRADOR</h2>
                <h6>Ingresa tus datos para iniciar sesión.</h6>
                <input type="text" id="usuario" required placeholder="Usuario">
                <input type="password" id="contrasena" required placeholder="Contraseña">
                <br>
                <input type="submit" value="Iniciar sesión">
                <a class="text-center text-white" href="#">Recuperar contraseña</a>
            </form>      
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>