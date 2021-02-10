<?php 

class Choferes extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {
      $this->view->mensaje = 'Esta pagina controla los choferes';
    
    $choferes = $this->model->choferes->get();
    $this->view->choferes = $choferes;
    
    $this->view->render('choferes/index');
    }else{
       $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/choferes/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>

 
