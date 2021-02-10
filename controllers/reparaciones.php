<?php 

class Reparaciones extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    $this->view->mensaje = 'Esta pagina controla las reparaciones';
    $reparaciones = $this->model->reparaciones->get();
    $this->view->reparaciones = $reparaciones;
    $this->view->render('reparaciones/index');
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/reparaciones/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>

 
