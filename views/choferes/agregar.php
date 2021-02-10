<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Choferes</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Agregar Usuario</h2> 
        
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>choferes/registrarChofer" method="POST" id="formulario" class="form">
      
        <div class="form__box">
          <div>
            <label for="nombre">Nombre:</label>
            <input type="text" data-patron="^[a-zA-Z]{3,12}$" name="nombre" id="nombre" placeholder="Ingrese el nombre" pattern="[a-zA-Z]{3,12}$" maxlength="12" title="El formato solo acepta caracteres entre mayúsculas y minusculas"/>
         </div>
         <div>
            <label for="apellido">Apellido:</label>
            <input type="text" maxlength="12"  name="apellido" id="apellido" placeholder="Ingrese el apellido" pattern="[a-zA-Z]{3,12}$" data-patron="^[a-zA-Z]{3,12}$" title="El formato solo acepta caracteres entre mayúsculas y minusculas"/>
      
         </div>
          <div>
            <label for="cedula">Cedula:</label>
            <input type="text" name="cedula" id="cedula" placeholder="xx.xxx.xxx"  maxlength="8" data-patron="[0-9]{7,8}"title="De 6 a 9 numeros"/>
          </div>
          <div>
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono"  placeholder="04xx-xxxxxxx" maxlength="11" data-patron="[0-9]{11,12}" title="Solo se permiten numeros del 0 al 9" />
           
          </div>
          <div>
                <label for="vehiculo">Vehiculo</label>
                <select class="select"  id="select" name="placa" required>
                  <option value="0">Seleccione</option>
                  <?php 
                    foreach($this->vehiculos as $row){
                      $vehiculo = new VehiculosClass();
                      $vehiculo = $row;
                 ?>
                <option value="<?php echo $vehiculo->getPlaca()?>"><?php echo $vehiculo->getPlaca().' - '.$vehiculo->getModelo(); ?></option>
                  <?php } ?>

                </select>
                
              </div>
           </div>

         
        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit" onclick= "validarFormulario()" >Agregar</button>
          <a href="<?php echo constant('URL')?>choferes" >Volver</a>

        </div>

      </form>
    </main>
  </div>
   <script src="<?php echo constant('URL')?>public/js/choferes/agregar.js"></script>
        
</body>
</html>
