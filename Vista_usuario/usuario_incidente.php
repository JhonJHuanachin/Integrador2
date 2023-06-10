<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REPORTE INCIDENTE</title>
  <link rel="stylesheet" type="text/css" href="../Estilos/estilos_usuario.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="header">
    <nav class="navbar bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <p class="display-6 text-white">PORTAL INCIDENTES</p>
      </div>
    </nav>
  </div>
  <div class="container-fluid">
    <br>
    <h3 class="text-body-secondary text-center">Cuentanos, ¿Sobre que trata tu solicitud?</h3>
    <form action="#" method="POST" id="form_incidentes">
      <input name="titulo" id="titulo" placeholder="Titulo" required>
      <select name="categoria" id="categoria" required>
        <option value="">Selecciona una categoría</option>
        <option value="Categoría 1">Categoría 1</option>
        <option value="Categoría 2">Categoría 2</option>
        <option value="Categoría 3">Categoría 3</option>
      </select>
      <label for="descripcion">Descripción:</label>
      <textarea name="descripcion" id="descripcion" rows="4" required></textarea>
      <label for="adjunto">Adjuntar archivo (JPG/PNG):</label>
      <input type="file" name="adjunto" id="adjunto" accept=".jpg, .png">
      <br>
      <input type="submit" value="Enviar">
    </form>
    <div id="mensaje"></div>
  </div>
  <br>

  <div class="container-fluid" id="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <h5>Descarga la aplicación</h5>
          <p>Todas las operaciones desde tu celular</p>
          <div class="app-icons">
            <a href=""><img src="../img/google.jpg" alt="Google Play"></a>
            <a href=""><img src="../img/appstore.png" alt="App Store"></a>
          </div>
        </div>
        <div class="col-md-4">
          <h5>Canales de ayuda</h5>
          <p>Las 24 horas del dia</p>
          <a href="" class="btn btn-outline-success">WhatsApp</a>
        </div>
        <div class="col-md-4">
          <h5>Contactanos</h5>
          <p><a href="">+01 300 9000</a></p>
          <p><a href="">+51 876 543 21</a></p>
        </div>
      </div>
    </div>
    <br>
    <p>© Copyright 2023 - Todos los derechos reservados</p>
  </div>

  <script>
    document.getElementById("form_incidentes").addEventListener("submit", function(event) {
      event.preventDefault();
      var mensaje = "¡Formulario enviado con éxito!";
      alert(mensaje);
      document.getElementById("form_incidentes").reset();
    });
  </script>
</body>

</html>