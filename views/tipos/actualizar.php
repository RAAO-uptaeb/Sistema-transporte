<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Mantenimientos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
         <div class="text-header">
            <h2>Actualizar tipos de mantenimientos</h2> 
        </div>

      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>tipos/modificarTipo" method="POST" class="form">
        <div class="form__box ">
         <div>
            <label for="nombre_tipo">Nombre:</label>
            <input type="text" name="nombre_tipo" readonly id="nombre_tipo" 
            value="<?php echo $this->tipos->getNombre();?>">

         </div>
         <div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" id="nombre" value="<?php echo $this->tipos->getDescripcion();?>">

         </div>
         <div>
            <label for="tiempo">Cada cuanto tiempo se realiza:</label>
            <input type="text"  name="tiempo" id="tiempo" value="<?php echo $this->tipos->getTiempo();?>">

         </div>
        
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="modificarTipo" value="modificarTipo">Modificar Tipo</button>
          <a href="<?php echo constant('URL')?>tipos/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>