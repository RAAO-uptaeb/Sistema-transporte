<?php 
  
  if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $telefono = ($_POST['telefono'] !== "") ? $_POST['telefono'] : NULL;
      $placa  = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;

      if ($this->model->choferes->insert(['nombre'=>$nombre, 'apellido'=>$apellido, 'placa'=>$placa, 'cedula'=>$cedula, 'telefono'=>$telefono])){
      $this->view->mensaje = '¡Chofer agregado exitosamente!';
        
      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
        $this->view->error = $this->model->choferes->getError();
      }
       $this->view->render('choferes/mensaje');
    }else{
      $this->view->mensaje = 'Rellene los campos';
      //Función en modelo choferes para obtener vehiculos
      $vehiculos = $this->model->choferes->getVehiculos();
      $this->view->vehiculos = $vehiculos;
      $this->view->render('choferes/agregar');
    }

    

?>