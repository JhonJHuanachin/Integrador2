<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
    <div class="container-fluid bg-dark text-white">
        <h1>AGREGAR ADMINISTRADORES</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <div class="container-fluid">
    <form action="../Controlador/controlador_admin.php?action=agregar" method="POST">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre" name="Nombre" />
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Apellido" name="Apellido" />
                </div>
            </div>
            <br />
            <div class="row g-3">
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email" name="Email" />
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Telefono" name="Telefono" />
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">
            <button type="submit" class="btn btn-primary">GUARDAR</button>
            <button type="button" class="btn btn-danger"><a class="text-decoration-none text-white" href="../Vista/lista_admin.php">ATRAS</button>
        </div>
    </form>
    </div>
    

</body>

</html>