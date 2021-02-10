<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Choferes</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestion de choferes</h2> 
        </div>

    <div class="tabla" id="form" data-eliminar="eliminarChofer">
      <div>
          <table>
            <tr><th>ID</th> <th>Nombre</th><th>Apellido</th><th>C.I.</th><th>Telefono</th><th>Vehiculo</th> <th>Modificar</th> <th>Eliminar</th>
            <tbody id="tbody-choferes">
              <?php
                foreach($this->choferes as $row){
                  $choferes = new ChoferesClass();
                  $choferes = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $choferes->getId(); ?>">
                <td><?php echo $choferes->getId(); ?></td>
                <td><?php echo $choferes->getNombre(); ?></td>
                <td><?php echo $choferes->getApellido(); ?></td>
                <td><?php echo $choferes->getCedula(); ?></td>
                <td><?php echo $choferes->getTelefono(); ?></td>
                <td><?php echo $choferes->getPlaca(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>choferes/modificarChofer/<?php echo $choferes->getId();?>">Modificar</a></td>
                <td>
                   <button class="crud eliminar" data-id="<?php echo $choferes->getId(); ?>">Eliminar</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>choferes/registrarChofer">Registrar</a>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
    </main>
  </div>
  

  <script src="<?php echo constant('URL')?>public/js/AJAX/eliminar.js"></script>
</body>
</html>
