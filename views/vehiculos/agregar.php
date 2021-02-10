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
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 

        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>
         </div>
        <form action="<?php echo constant('URL')?>vehiculos/registrarVehiculo" method="POST" class="form" id="formulario" name="formulario"  name="form">
      
        <div class="form__box">
         <div>
            <label for="placa">Placa:</label>
            <input type="text" maxlength="6" name="placa" id="placa" placeholder="ABC-123"  data-patron="[A-Z]{3}[0-9]{3}" pattern="[A-Z]{3}[0-9]{3}" title="El formato debe coincidir con 3 letras mayúsculas y 3 números."/ required>
            <!-- validacion de la placa 3 letras y  numeros -->
     
         </div>
         <div>
            <label for="modelo" >Modelo:</label>
            <input type="text"  data-patron="^[a-zA-Z]{3,12}$" maxlength="12" name="modelo" id="modelo"  placeholder="Encava/Otro" pattern="[a-zA-Z]{3,12}$" required title="El formato solo acepta caracteres entre mayúsculas y minusculas">
           
         </div>
         <div>
            <label for="funcionamiento">Funcionamiento:</label>
             <select name="funcionamiento" id="funcionamiento" class="select">
                <option value="">...</option>
                <option value="Operativo">Operativo</option>
                <option value="Inoperante">Inoperante</option>
            </select>
         </div>
     
        </div>

        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit" onclick="validarFormulario()" >Agregar</button>
          <a href="<?php echo constant('URL')?>vehiculos" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/vehiculos/validarvehiculo.js"></script>
<script src="<?php echo constant('URL')?>public/js/vehiculos/validacion.js"></script>

</body>
</html>
