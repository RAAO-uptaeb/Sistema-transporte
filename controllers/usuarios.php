<?php 

class Usuarios extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {
      $this->view->mensaje = 'Esta pagina controla los usuarios';
    
    $usuarios = $this->model->usuarios->get();
    $this->view->usuarios = $usuarios;
    
    $this->view->render('usuarios/index');
    }else{
       $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/usuarios/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>

 
