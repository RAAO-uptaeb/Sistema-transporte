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
            <h2>Actualizar reparacion</h2> 
        </div>

      <div class="modal-container">
        <?php include 'views/errores/mensaje.php'?>
        
      </div>
        <form action="<?php echo constant('URL')?>reparaciones/modificarReparacion" method="POST" class="form">
        <div class="form__box ">
    
               <div>
                <label for="id_reparaciones">ID:</label>
                <input type="text"  name="id_reparaciones" value="<?php echo $this->reparaciones->getId();?>" id="id_reparaciones" readonly placeholder="Describa la reparacion">
               
             </div>
          <div>
                <label for="vehiculo">Vehiculo</label>
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
                <input type="text"  name="descripcion" value="<?php echo $this->reparaciones->getDescripcion();?>" id="descripcion" placeholder="Describa la reparacion">
               
             </div>
             <div>
                <label for="costo">Costo:</label>
                <input type="text"  value="<?php echo $this->reparaciones->getCosto();?>" name="costo" id="costo" placeholder="Costo de la reparacion">
             </div>
              
          <div>
            <label for="fecha">Fecha:</label>
            <input type="date" value="<?php echo $this->reparaciones->getFecha();?>" name="fecha" id="fecha" required>
          </div>
        </div>
        <div class="bottom">
          <button type="submit" id="submit" name="modificarReparacion" value="modificarReparacion">Modificar Reparacion</button>
          <a href="<?php echo constant('URL')?>reparaciones/">Cancelar</a>
        </div>
        
      </form>
    </main>
  </div>

</body>
</html>