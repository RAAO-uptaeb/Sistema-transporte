<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Talleres</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Agregar taller</h2> 
        
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>talleres/registrartaller" method="POST" class="form">
      
        <div class="form__box">
        <div>
          <label for="rif">Rif:</label>
          <input type="text" name="rif" id="rif" data-patron="[VEPGJ]-?\d{6,10}.?\d?"  pattern="[VEPGJ]-?\d{6,10}.?\d?" title="El formato es una letra (V-E-P-G) seguido por 8 o 9 numeros, si faltan numeros complete con un 0" placeholder="V-123456789-0">

        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" data-patron="[a-zA-Z]{5,30}$" placeholder="Nombre del taller">

         </div>
   
         <div>
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="direccion" data-patron="[a-zA-Z]{5,30}$" placeholder="direccion del taller">
         </div>
        </div>

        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit" >Agregar</button>
          <a href="<?php echo constant('URL')?>talleres" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/taller/validar.js"></script>
</body>
</html>
