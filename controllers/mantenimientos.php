<?php 

class Mantenimientos extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
   
    $this->view->mensaje = 'Esta pagina controla los mantenimientos';
    $mantenimientos = $this->model->mantenimientos->get();
    $this->view->mantenimientos = $mantenimientos;
    $this->view->render('mantenimientos/index');
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/mantenimientos/'.$metodo.'.php';
    $ruta  == "source/mantenimientos/index.php";
    require_once $ruta;
  }

}

?>
