<?php 
  
  if(isset($_POST['agregar'])){
      $nombre_tipo    = ($_POST['nombre_tipo'] !== "") ? $_POST['nombre_tipo'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
      $tiempo = ($_POST['tiempo'] !== "") ? $_POST['tiempo'] : NULL;
       
      if ($this->model->tipos->insert(['nombre_tipo'=>$nombre_tipo, 'descripcion'=>$descripcion, 'tiempo'=>$tiempo])){
        $this->view->mensaje = '¡Tipo de mantenimiento agregado exitosamente!.';
      }else{
        $this->view->mensaje = 'Ha ocurrido un error!';
        $this->view->error = $this->model->tipos->getError();
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('tipos/agregar');

?>
