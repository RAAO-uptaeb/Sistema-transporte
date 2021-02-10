<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Seguridad</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <script src="<?php echo constant('URL')?>public/js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
        <div class="text-header">
            <h2>Bitacora del sistema</h2> 
        </div>
         <div class="tabla" id="form">
      <div>
          <table>
            <tr> <th>Descripcion del proceso</th><th>Usuario</th><th>Rol</th><th>Fecha</th><th>Hora</th></tr>
           <tbody>
           <?php 
                 foreach($this->bitacora as $row){
                  $bitacora = new BitacoraCLas();
                 $bitacora = $row;
              ?>
              </tr >
              <tr id="fila-<?php echo $bitacora->getIdBitacora(); ?>">
                <td><?php echo $bitacora->getIdUsuario(); ?></td>
                <td><?php echo $bitacora->getFecha(); ?></td>
                <td><?php echo $bitacora->getHora(); ?></td>
                <td><?php echo $bitacora->getAccion(); ?></td>
                <td><a class="crud" href="<?php echo constant('URL')?>bitacora/modificarBitacora/<?php echo $bitacora->getIdBitacora();?>">Modificar</a></td>
                <td>

              </tr>
              <?php } ?>

    

          </table>
      </div>

        <div class="bottom">
          <a href="<?php echo constant('URL')?>"><img src="<?php echo constant('URL')?>public/img/respaldo.png" width="20">Respaldo de la base de datos</a>
          <a href="<?php echo constant('URL')?>">Volver</a>
        </div> 
      </div>
    </main>
  </div>


</body>
</html>
