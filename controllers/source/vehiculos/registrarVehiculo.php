<?php 
  
  if(isset($_POST['agregar'])){
      $placa    = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
      $modelo = ($_POST['modelo'] !== "") ? $_POST['modelo'] : NULL;
      $funcionamiento = ($_POST['funcionamiento'] !== "") ? $_POST['funcionamiento'] : NULL;
    
      if ($this->model->vehiculos->insert(
        ['placa'=>$placa, 
        'modelo'=>$modelo, 
        'funcionamiento'=>$funcionamiento])){

        $this->view->mensaje = '¡Vehiculo agregado exitosamente!';
      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
        $this->view->error = $this->model->vehiculos->getError();
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('vehiculos/agregar');

?>