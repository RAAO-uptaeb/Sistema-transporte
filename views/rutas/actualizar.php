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
            <h2>Actualizar ruta</h2> 
        </div>

      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>rutas/modificarRuta" method="POST" class="form">
        <div class="form__box ">
         
         <div>
            <label for="id_ruta">ID de la ruta</label>
            <input type="text" name="id_ruta" id="id_ruta" readonly  value="<?php echo $this->rutas->getId();?>">
         </div>
         <div>
            <label for="nombre_ruta">Nombre de la ruta:</label>
            <input type="text" name="nombre_ruta" id="nombre_ruta" placeholder="Ingrese el nombre_ruta" value="<?php echo $this->rutas->getNombre();?>">
         </div>
         <div>
            <label for="direccion_ruta">Dirección:</label>
            <input type="text" name="direccion_ruta" id="direccion_ruta" value="<?php echo $this->rutas->getDireccion();?>">

         </div>
          <div>
            <label for="hora_salida">Hora de salida:</label>
            <input type="time" name="hora_salida" id="hora_salida" value="<?php echo $this->rutas->getHoraSalida();?>">

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
          <button type="submit" id="submit" name="modificarRuta" value="modificarRuta">Modificar ruta</button>
          <a href="<?php echo constant('URL')?>rutas/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>