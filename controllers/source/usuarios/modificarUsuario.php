<?php 
	
	if(isset($_POST['modificarUsuario'])) {

      $nombre    = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
      $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
      $usuario = ($_POST['usuario'] !== "") ? $_POST['usuario'] : NULL;
      $rol        = ($_POST['rol'] !== "") ? $_POST['rol'] : NULL;
      $cedula     = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;
      $contrasena     = ($_POST['contrasena'] !== "") ? $_POST['contrasena'] : NULL;

      if ($this->model->usuarios->update(['nombre'=>$nombre, 'apellido'=>$apellido, 'contrasena'=>$contrasena, 'rol'=>$rol, 'usuario'=>$usuario, 'cedula'=>$cedula])){
        $this->view->mensaje = '¡Usuario Modificado exitosamente!';

      }else{
        $this->view->mensaje = '¡Ha ocurrido un error!';
      }
      $this->view->render('usuarios/mensaje');

    } else {
      
      $usuarios = $this->model->usuarios->get($param[0]);

      if (isset($usuarios)){

        $this->view->usuarios = $usuarios[0];

        $this->view->render('usuarios/actualizar'); 
      } else {
        $this->view->mensaje = 'Usuario no encontrado';
        $this->view->render('usuarios/mensaje');
      }
    }

?>