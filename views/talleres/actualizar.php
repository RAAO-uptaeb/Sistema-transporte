<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Taller</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
         <div class="text-header">
            <h2>Actualizar taller</h2> 
        </div>

      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>talleres/modificarTaller" method="POST" class="form">
        <div class="form__box ">
         <div>
            <label for="rif">Rif:</label>
            <input type="text" name="rif" id="rif" 
            value="<?php echo $this->talleres->getRif();?>">

         </div>
         <div>
            <label for="nombre">Nombre:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nombre" id="nombre" value="<?php echo $this->talleres->getNombre();?>">

         </div>
         <div>
            <label for="direccion">Direccion:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="direccion" id="direccion" value="<?php echo $this->talleres->getDireccion();?>">

         </div>
        
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="modificarTaller" value="modificarTaller">Modificar Taller</button>
          <a href="<?php echo constant('URL')?>talleres/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/usuarios/actualizar.js"></script>
</body>
</html>