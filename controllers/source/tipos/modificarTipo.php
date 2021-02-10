<?php 
	
	if(isset($_POST['modificarTipo'])) {
    
      $nombre_tipo    = ($_POST['nombre_tipo'] !== "") ? $_POST['nombre_tipo'] : NULL;
      $descripcion = ($_POST['descripcion'] !== "") ? $_POST['descripcion'] : NULL;
      $tiempo = ($_POST['tiempo'] !== "") ? $_POST['tiempo'] : NULL;

      if ($this->model->tipos->update(['nombre_tipo'=>$nombre_tipo, 'descripcion'=>$descripcion, 'tiempo'=>$tiempo])){
        $this->view->mensaje = '¡Tipo de mantenimiento Modificado exitosamente!';

      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('tipos/mensaje');

    } else {
      
      $tipos = $this->model->tipos->get($param[0]);

      if (isset($tipos)){

        $this->view->tipos = $tipos[0];

        $this->view->render('tipos/actualizar'); 
      } else {
        $this->view->mensaje = 'Tipo de mantenimiento no encontrado';
        $this->view->render('tipos/mensaje');
      }
    }

?>