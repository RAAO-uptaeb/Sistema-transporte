<?php 

class Tipos extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
      $this->view->mensaje = 'Esta pagina controla los tipos mantenimientos';
    
    $tipos = $this->model->tipos->get();
    $this->view->tipos = $tipos;
    
    $this->view->render('tipos/index');


  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/tipos/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>
