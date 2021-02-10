<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Reparaciones</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestion de reparacion</h2> 
        </div>

    <div class="tabla" id="form" data-eliminar="eliminarReparacion">
      <div>
          <table>
            <tr><th>ID</th> <th>Taller</th><th>Vehiculo</th><th>Costo</th><th>Fecha</th><th>Descripcion</th> <th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-reparaciones">
              <?php
                foreach($this->reparaciones as $row){
                  $reparaciones = new ReparacionesClass();
                  $reparaciones = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $reparaciones->getId(); ?>">
                <td><?php echo $reparaciones->getId(); ?></td>
                <td><?php echo $reparaciones->getNombre(); ?></td>
                <td><?php echo $reparaciones->getPlaca(); ?></td>
                <td><?php echo $reparaciones->getCosto(); ?></td>
                <td><?php echo $reparaciones->getFecha(); ?></td>
                <td><?php echo $reparaciones->getDescripcion(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>reparaciones/modificarReparacion/<?php echo $reparaciones->getId();?>">Modificar</a></td>
                <td>
                  <button class="crud eliminar" data-id="<?php echo $reparaciones->getId(); ?>">Eliminar</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>

        <div class="bottom">
            <a href="<?php echo constant('URL')?>reparaciones/registrarReparacion">Registrar</a>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
    </main>
  </div>
  

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
