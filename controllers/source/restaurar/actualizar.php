<?php

  if(isset($_POST['btn'])){
      $password1    = ($_POST['password1'] !== "") ? $_POST['password1'] : NULL ;
      if($this->model->cambiar($password1)){

        $this->view->mensaje = 'Cambio de contraseña efectuado con exito.';
        $this->view->render('login/index');

      }
      else{
        $this->view->mensaje = 'No se pudo realizar el cambio de contraseña.';
        $this->view->render('login/index');
      }


      }


?>