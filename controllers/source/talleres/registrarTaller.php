<?php 
  
  if(isset($_POST['agregar'])){
      $rif    = ($_POST['rif'] !== "") ? $_POST['rif'] : NULL;
      $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $direccion = ($_POST['direccion'] !== "") ? $_POST['direccion'] : NULL;
       
      if ($this->model->talleres->insert(['rif'=>$rif, 'nombre'=>$nombre, 'direccion'=>$direccion])){
        $this->view->mensaje = 'Taller agregado exitosamente!.';
      }else{
        $this->view->mensaje = 'Ha ocurrido un error!';
        $this->view->error = $this->model->talleres->getError();
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('talleres/agregar');

?>