<?php 
	
	if(isset($_POST['modificarReparacion'])) {
      $id_reparaciones    = ($_POST['id_reparaciones'] !== "") ? $_POST['id_reparaciones'] : NULL;
      $placa    = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
      $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
      $costo  = ($_POST['costo'] !== "") ? $_POST['costo'] : NULL;
      $fecha     = ($_POST['fecha'] !== "") ? $_POST['fecha'] : NULL;


      if ($this->model->reparaciones->update(['placa'=>$placa,'id_reparaciones'=>$id_reparaciones, 'nombre'=>$nombre, 'descripcion'=>$descripcion, 'costo'=>$costo, 'fecha'=>$fecha])){
        $this->view->mensaje = '¡Reparacion Modificada exitosamente!';

      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('reparaciones/mensaje');

    } else {
      
      $reparaciones = $this->model->reparaciones->get($param[0]);
      $vehiculos = $this->model->reparaciones->getVehiculos();
      $this->view->vehiculos = $vehiculos;
        $talleres = $this->model->reparaciones->getTalleres();
      $this->view->talleres = $talleres;
      if (isset($reparaciones)){

        $this->view->reparaciones = $reparaciones[0];

        $this->view->render('reparaciones/actualizar'); 
      } else {
        $this->view->mensaje = 'Chofer no encontrado';
        $this->view->render('reparaciones/mensaje');
      }
    }

?>