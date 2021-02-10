<?php 
	
	if(isset($_POST['modificar'])) {

      $placa    = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
      $modelo = ($_POST['modelo'] !== "") ? $_POST['modelo'] : NULL;
      $funcionamiento = ($_POST['funcionamiento'] !== "") ? $_POST['funcionamiento'] : NULL;


      if ($this->model->vehiculos->update(['placa'=>$placa, 'modelo'=>$modelo, 'funcionamiento'=>$funcionamiento])){
        $this->view->mensaje = '¡Vehiculo modificado exitosamente!';

      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('vehiculos/mensaje');

    } else {
      
      $vehiculos = $this->model->vehiculos->get($param[0]);

      if (isset($vehiculos)){

        $this->view->vehiculos = $vehiculos[0];

        $this->view->render('vehiculos/actualizar'); 
      } else {
        $this->view->mensaje = 'vehiculo no encontrado';
        $this->view->render('vehiculos/mensaje');
      }
    }

?>