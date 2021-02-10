<?php 
	
	if(isset($_POST['modificarRuta'])) {
      $id_ruta    = ($_POST['id_ruta'] !== "") ? $_POST['id_ruta'] : NULL;
      $nombre_ruta    = ($_POST['nombre_ruta'] !== "") ? $_POST['nombre_ruta'] : NULL;
      $direccion_ruta = ($_POST['direccion_ruta'] !== "") ? $_POST['direccion_ruta'] : NULL;
      $hora_salida = ($_POST['hora_salida'] !== "") ? $_POST['hora_salida'] : NULL;
      $placa  = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
    

      if ($this->model->rutas->update(['id_ruta'=>$id_ruta, 'nombre_ruta'=>$nombre_ruta, 'direccion_ruta'=>$direccion_ruta, 'placa'=>$placa, 'hora_salida'=>$hora_salida])){
        $this->view->mensaje = '¡Ruta Modificado exitosamente!';

      }else{
    
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('rutas/mensaje');

    } else {
      
      $rutas = $this->model->rutas->get($param[0]);
      $vehiculos = $this->model->rutas->getVehiculos();
      $this->view->vehiculos = $vehiculos;
      if (isset($rutas)){

        $this->view->rutas = $rutas[0];

        $this->view->render('rutas/actualizar'); 
      } else {
        $this->view->mensaje = 'Ruta no encontrado';
        $this->view->render('rutas/mensaje');
      }
    }

?>