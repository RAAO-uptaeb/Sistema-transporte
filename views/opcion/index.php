<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Mantenimientos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Seleccione una opcion</h2> 
        </div>
        <div class="tabla">
          <table>
            <th><a class="crud" href="<?php echo constant('URL')?>tipos"><img src="<?php echo constant('URL')?>public/img/tipos.png"><br>Tipos</a></th>
            <th><a class="crud" href="<?php echo constant('URL')?>mantenimientos"><img src="<?php echo constant('URL')?>public/img/realizar.png"><br>Realizar</a></th>
          </table>
        </div>
          
    </main>
  </div>
  

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
