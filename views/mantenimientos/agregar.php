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
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Agregar reparación</h2> 
        
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>mantenimientos/registrarMantenimiento" method="POST" class="form">
      
        <div class="form__box">
           <div>
                <label for="placa">Vehiculo</label>
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
            <div>
                <label for="taller">Taller</label>
                <select class="select"  id="select" name="taller">
                  <option value="0" required >Seleccione</option>
                  <?php 
                    foreach($this->talleres as $row){
                      $taller = new TalleresClass();
                      $taller = $row;
                 ?>
                <option value="<?php echo $taller->getNombre()?>"><?php echo $taller->getNombre(); ?></option>
                  <?php } ?>

                </select>
                
              </div>
               <div>
                <label for="tipo">Tipo de mantenimiento</label>
                <select class="select"  id="select" name="tipo">
                  <option value="0">Seleccione</option>
                  <?php 
                    foreach($this->tipos as $row){
                      $tipo = new TiposClass();
                      $tipo = $row;
                 ?>
                <option value="<?php echo $tipo->getNombre()?>"><?php echo $tipo->getNombre(); ?></option>
                  <?php } ?>

                </select>
                
              </div>
             <div>
                <label for="costo">Costo:</label>
                <input type="text"  data-pront="" name="costo" id="costo" placeholder="Costo de la reparacion" required>
             </div>
              
          <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>
          </div>
        
         
             
           </div>


        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>mantenimientos" >Volver</a>

        </div>

      </form>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/mantenimientos/validar.js" ></script>
</body>
</html>
