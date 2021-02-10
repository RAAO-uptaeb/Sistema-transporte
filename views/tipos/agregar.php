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
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Agregar tipo de mantenimiento</h2> 
        
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>tipos/registrarTipo" method="POST" class="form">
      
        <div class="form__box">

        <div>
            <label for="nombre_tipo">Nombre del mantenimiento:</label>
            <input type="text" name="nombre_tipo" id="nombre_tipo">

         </div>
   
         <div>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion">
         </div>
          <div>
            <label for="tiempo">Cada cuanto tiempo se debe realizar:</label>
            <input type="text" name="tiempo" id="tiempo">
         </div>

        </div>

        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>tipos" >Volver</a>

        </div>

      </form>
    </main>
  </div>

</body>
</html>
