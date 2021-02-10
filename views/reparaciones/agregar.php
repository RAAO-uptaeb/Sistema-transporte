<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | Reparaciones</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
</head>
<body>
  <!-- Uso esta clase por el fondo rojo -->
  <?php require 'views/header.php'; ?> <!-- MENU -->
  <div class="container">
    <main>
      <div class="text-header">
            <h2> <?php echo $this->mensaje ?> </h2> 
            <h2>Agregar reparacion</h2> 
        
        </div>
      <div class="modal-container">
        <?php require_once 'views/errores/mensaje.php'?>

      </div>
        <form action="<?php echo constant('URL')?>reparaciones/registrarReparacion" method="POST" class="form">
      
        <div class="form__box">
           <div>
                <label for="vehiculo" id>Vehiculo</label>
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
            <div>
                <label for="nombre">Taller</label>
                <select class="select"  id="select" name="nombre">
                  <option value="0">Seleccione</option>
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
                <label for="descripcion">Descripcion:</label>
                <input type="text"  name="descripcion" id="descripcion" id="descripcion" placeholder="Describa la reparacion" data-patron="^[a-zA-Z]{3,12}$">
               
             </div>
             <div>
                <label for="costo">Costo:</label>
                <input type="text" data-patron="[0-9]{11,12}" name="costo" id="costo" placeholder="Costo de la reparacion" id="costo">
             </div>
              
          <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>
          </div>
        
         
             
           </div>


        <div class="bottom">
          <button type="submit" name="agregar"  value="agregar" id="submit">Agregar</button>
          <a href="<?php echo constant('URL')?>reparaciones" >Volver</a>

        </div>

      </form>
    </main>
  </div>
    <script src="<?php echo constant('URL')?>public/js/reparaciones/validar.js"></script>

</body>
</html>
