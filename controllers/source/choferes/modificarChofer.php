<?php 
	
	if(isset($_POST['modificarChofer'])) {

      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $telefono = ($_POST['telefono'] !== "") ? $_POST['telefono'] : NULL;
      $placa  = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;

      if ($this->model->choferes->update(['nombre'=>$nombre, 'apellido'=>$apellido, 'placa'=>$placa, 'cedula'=>$cedula, 'telefono'=>$telefono])){
        $this->view->mensaje = '¡Chofer Modificado exitosamente!';

      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('choferes/mensaje');

    } else {
      
      $choferes = $this->model->choferes->get($param[0]);
      $vehiculos = $this->model->choferes->getVehiculos();
      $this->view->vehiculos = $vehiculos;
      if (isset($choferes)){

        $this->view->choferes = $choferes[0];

        $this->view->render('choferes/actualizar'); 
      } else {
        $this->view->mensaje = 'Chofer no encontrado';
        $this->view->render('choferes/mensaje');
      }
    }

?>