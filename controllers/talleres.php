<?php 

class Talleres extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
 
    $this->view->mensaje = 'Esta pagina controla las talleres';
    $talleres = $this->model->talleres->get();
    $this->view->talleres = $talleres;
    $this->view->render('talleres/index');
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/talleres/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>