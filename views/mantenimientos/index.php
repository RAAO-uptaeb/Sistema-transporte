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
            <h2>Gestion de mantenimientos</h2> 
        </div>

    <div class="tabla" id="form" data-eliminar="eliminarMantenimiento">
      <div>
          <table>
            <tr><th>ID</th> <th>Taller</th><th>Vehiculo</th><th>Tipo de mantenimiento</th><th>Costo</th><th>Fecha</th> <th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-mantenimientos">
              <?php
                foreach($this->mantenimientos as $row){
                  $mantenimientos = new MantenimientosClass();
                  $mantenimientos = $row;
              ?>
              </tr>
              <tr id="fila-<?php echo $mantenimientos->getId(); ?>">
                <td><?php echo $mantenimientos->getId(); ?></td>
                <td><?php echo $mantenimientos->getNombre(); ?></td>
                <td><?php echo $mantenimientos->getPlaca(); ?></td>
                <td><?php echo $mantenimientos->getNombre_tipo(); ?></td>
                <td><?php echo $mantenimientos->getCosto(); ?></td>
                <td><?php echo $mantenimientos->getFecha(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>mantenimientos/modificarMantenimiento/<?php echo $mantenimientos->getId();?>">Modificar</a></td>
                <td>
                   <button class="crud eliminar" data-id="<?php echo $mantenimientos->getId(); ?>">Eliminar</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>mantenimientos/registrarMantenimiento">Registrar</a>
            <a href="<?php echo constant('URL')?>opcion">Volver</a>
        </div>
      </div>
    </main>
  </div>
  

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
