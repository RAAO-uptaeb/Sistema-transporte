<?php 
  
  if(isset($_POST['agregar'])){
    
      $nombre_ruta    = ($_POST['nombre_ruta'] !== "") ? $_POST['nombre_ruta'] : NULL;
      $direccion_ruta = ($_POST['direccion_ruta'] !== "") ? $_POST['direccion_ruta'] : NULL;
      $hora_salida = ($_POST['hora_salida'] !== "") ? $_POST['hora_salida'] : NULL;
      $placa  = ($_POST['placa'] !== "") ? $_POST['placa'] : NULL;
    

      if ($this->model->rutas->insert(['nombre_ruta'=>$nombre_ruta, 'direccion_ruta'=>$direccion_ruta, 'placa'=>$placa, 'hora_salida'=>$hora_salida])){

        $this->view->mensaje = '¡Ruta agregada exitosamente!';
      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
        $this->view->error = $this->model->rutas->getError();
      }
      $this->view->render('rutas/mensaje');
    }else{
      $this->view->mensaje = 'Rellene los campos';
      
      $vehiculos = $this->model->rutas->getVehiculos();
      $this->view->vehiculos = $vehiculos;
      $this->view->render('rutas/agregar');
    }



?>