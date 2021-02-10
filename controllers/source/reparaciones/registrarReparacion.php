
<?php 
  
  if(isset($_POST['agregar'])){
      $placa    = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
      $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
      $costo  = ($_POST['costo'] !== "") ? $_POST['costo'] : NULL;
      $fecha     = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;

      if ($this->model->reparaciones->insert(['placa'=>$placa, 'nombre'=>$nombre, 'descripcion'=>$descripcion, 'costo'=>$costo, 'fecha'=>$fecha])){
        $this->view->mensaje = '¡Reparacion agregada exitosamente!';
      }else{
        $this->view->mensaje = '¡Ha ocurrido un errores!';
        $this->view->error = $this->model->reparaciones->getError();

      }
      $this->view->render('reparaciones/mensaje');
    }else{
      $this->view->mensaje = 'Rellene los campos';

      $vehiculos = $this->model->reparaciones->getVehiculos();
      $this->view->vehiculos = $vehiculos;

      $talleres = $this->model->reparaciones->getTalleres();
      $this->view->talleres = $talleres;
      $this->view->render('reparaciones/agregar');

    }

    

?>