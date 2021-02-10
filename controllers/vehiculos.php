<?php 

class Vehiculos extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    if ($_SESSION['usuario'] == 'admin') {
      $this->view->mensaje = 'Esta pagina controla los vehiculos';
    
    $vehiculos = $this->model->vehiculos->get();
    $this->view->vehiculos = $vehiculos;
    
    $this->view->render('vehiculos/index');
    }else{
       $this->view->render('errores/bloquear');
    }
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/vehiculos/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>
