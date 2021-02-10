<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Rutas</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
        <div class="text-header">
            <h2>Gestion de rutas</h2> 
        </div>

    <div class="tabla" id="form" data-eliminar="eliminarRuta">
      <div>
          <table>
            <tr> <th>Id</th><th>Unidad encargada</th><th>Nombre de la ruta</th><th>Dirección</th><th>Hora de salida</th> <th>Modificar</th><th>Eliminar</th>
            <tbody id="tbody-rutas">
              <?php
                foreach($this->rutas as $row){
                  $ruta = new RutasClass();
                  $ruta = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $ruta->getId(); ?>">
                <td><?php echo $ruta->getId(); ?></td>
                <td><?php echo $ruta->getPlaca(); ?></td>
                <td><?php echo $ruta->getNombre(); ?></td>
                <td><?php echo $ruta->getDireccion(); ?></td>
                <td><?php echo $ruta->getHoraSalida(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>rutas/modificarRuta/<?php echo $ruta->getId();?>">Modificar</a></td>
                <td>
                  <button class="crud eliminar" data-id="<?php echo $ruta->getId(); ?>">Eliminar</button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
      </div>
        <div class="bottom">
            <a href="<?php echo constant('URL')?>rutas/registrarRuta">Registrar</a>
            <a href="<?php echo constant('URL')?>">Volver</a>
        </div>
      </div>
    </main>
  </div>
  

</body>
</html>
