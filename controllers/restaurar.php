<?php
class restaurar extends Controller {

    public function __construct() {
        parent::__construct();
          
       if ( isset( $_POST['ingresar'] ) ){

          $nombre = ($_POST['nombre'] !== "") ? $_POST['nombre'] : NULL;
          $apellido = ($_POST['apellido'] !== "") ? $_POST['apellido'] : NULL;
          $cedula = ($_POST['cedula'] !== "") ? $_POST['cedula'] : NULL;

          $this->loadModel('restaurar');

          if($this->verificacion( $nombre, $apellido, $cedula )) {
            session_start();
            $_SESSION['restaurarUsuario'] = $cedula;
            header('location:'. constant('URL').'restaurar/recuperar');
          }
        }

    } 

    public function load ($metodo, $param = null) {

    $ruta = 'source/restaurar/'.$metodo.'.php';

    require_once $ruta;
  }


    public function recuperar () {

      $this->view->render('restaurar/restaurar');
    }

    public function render () {
        $this->view->render('restaurar/index');
    }

    //Chequear si existe el usuario;
    public function verificacion( $nombre, $apellido, $cedula ) {

      if ( $this->model->usuarioExiste($nombre, $apellido, $cedula) ) {
 
        return true;
      } else {
         $this->view->mensaje = 'Datos incorrectos';
        return false; 
      }
    }

    public function actualizar() {
       if(isset($_POST['btn'])){
      $contrasena = ($_POST['contrasena'] !== "") ? $_POST['contrasena'] : NULL ;
      if($this->model->cambiar($contrasena)){

        session_unset();
        session_destroy();

        $this->view->mensaje = 'Cambio de contraseña efectuado con exito.';
        $this->view->render('login/index');

      }
      else{
        $this->view->mensaje = 'No se pudo realizar el cambio de contraseña.';
        $this->view->render('login/index');
      }


      }
    }
  }

?>