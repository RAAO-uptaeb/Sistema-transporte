<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Vehiculos</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>

  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">

    <main>
         <div class="text-header">
            <h2>Actualizar vehiculo</h2> 
        </div>

      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>vehiculos/modificarVehiculo" method="POST" class="form">
        <div class="form__box ">
         <div>
            <label for="placa">Placa:</label>
            <input type="text" name="placa" id="placa" value="<?php echo $this->vehiculos->getPlaca();?>" readonly>

         </div>
         <div>
            <label for="modelo">Modelo:</label>
            <input type="text"  name="modelo" id="modelo" value="<?php echo $this->vehiculos->getModelo();?>">
  
         </div>
         <div>
            <label for="funcionamiento">Funcionamiento:</label>
             <select name="funcionamiento" id="funcionamiento" class="select" required >
                <option value="">...</option>
                <option value="Operativo">Operativo</option>
                <option value="Inoperante">Inoperante</option>>
            </select>

         </div>
          
        </div>
        
        <div class="bottom">
          <button type="submit" id="submit" name="modificar" value="modificar">Modificar Vehiculo</button>
          <a href="<?php echo constant('URL')?>vehiculos/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>