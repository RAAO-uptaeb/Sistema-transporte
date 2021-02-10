<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Rutas</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Agregar Ruta</h2> 
        
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>rutas/registrarRuta" method="POST" class="form" id="formulario">
      
        <div class="form__box">
         
          <div>
            <label for="nombre_ruta">Nombre de la ruta:</label>
            <input type="text" name="nombre_ruta" id="nombre_ruta" data-patron="^[a-zA-Z]{5,30}$" pattern="[a-zA-Z]{5,30}" placeholder="Ingrese el nombre" title="Solo se aceptan caracteres en este campo" maxlength="30">
          
         </div>
          <div>
            <label for="direccion_ruta">Dirección:</label>
            <input type="text" name="direccion_ruta" id="direccion_ruta" placeholder="Ingrese la dirección" data-patron="[a-zA-Z]{10,30}$" title="Solo se aceptan caracteres en este campo" maxlength="30">
          
          </div>
          <div>
            <label for="hora_salida" >Hora de salida:</label>
            <input type="time" name="hora_salida" id="hora_salida" required>

          </div>
          <div>
                <label for="vehiculo">Unidad encargada:</label>
                <select class="select"  id="select" name="placa">
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
           <button type="submit" name="agregar"  value="agregar" onclick= "validarFormulario()" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>rutas" >Volver</a>

        </div>

      </form>
    </main>
  </div>
    <script src="<?php echo constant('URL')?>public/js/rutas/validar.js"></script>

</body>
</html>
