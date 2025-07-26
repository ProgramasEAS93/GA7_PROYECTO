<!doctype html>
<html lang="es"> <!-- Usar "es" si el contenido está en español -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (usa solo una versión, no repitas) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body>

    <?php include 'banner.php'; ?>

    <div class="card text-center m-4">
      <div class="card-body">
        <h4 class="card-title">BIENVENIDOS</h4>
      </div>
    </div>

    <div class="container mb-4">
      <?php include 'navegacion.php'; ?>
    </div>

    <!-- Bootstrap Bundle con Popper -->
 <!-- Popper.js (necesario para el dropdown) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  </body>
</html>
