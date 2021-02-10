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

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestion de tipos de mantenimientos</h2> 
        </div>

    <div class="tabla" id="form" data-eliminar="eliminarTipo">
      <div>
          <table>
            <tr>
             <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Cada cuanto tiempo</th><th>Modificar</th> <th>Eliminar</th>
              <tbody id="tbody-tipos">
              <?php
                foreach($this->tipos as $row){
                  $tipo = new TiposClass();
                  $tipo = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $tipo->getId(); ?>">
                <td><?php echo $tipo->getNombre(); ?></td>
                <td><?php echo $tipo->getDescripcion(); ?></td>
                <td><?php echo $tipo->getTiempo(); ?></td>

                <td><a class="crud" href="<?php echo constant('URL')?>tipos/modificarTipo/<?php echo $tipo->getNombre();?>">Modificar</a></td>
                
                <td><button class="crud eliminar" data-id="<?php echo $tipo->getId(); ?>">Eliminar</button></td>

              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>tipos/registrarTipo">Registrar</a>
            <a href="<?php echo constant('URL')?>opcion">Volver</a>
        </div>
      </div>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
