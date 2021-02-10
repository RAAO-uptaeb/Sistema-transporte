<?php 
  
  if(isset($_POST['agregar'])){
      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $usuario = ($_POST['usuario'] !== "") ? $_POST['usuario'] : NULL;
      $rol        = ($_POST['rol'] !== "") ? $_POST['rol'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;
      $contrasena     = ($_POST['contrasena'] !== "") ? $_POST['contrasena'] : NULL;
      if ($this->model->usuarios->insert(['nombre'=>$nombre, 'apellido'=>$apellido, 'contrasena'=>$contrasena, 'rol'=>$rol, 'cedula'=>$cedula, 'usuario'=>$usuario])){
        $this->view->mensaje = '¡Usuario agregado exitosamente!';
      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
        $this->view->error = $this->model->usuarios->getError();
      }
    }else{
      $this->view->mensaje = 'Rellene los campos';
    }

    $this->view->render('usuarios/agregar');

?>