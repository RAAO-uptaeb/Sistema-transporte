<?php 

class Rutas extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {
    $this->view->mensaje = 'Esta pagina controla las rutas';
    $rutas = $this->model->rutas->get();
    $this->view->rutas = $rutas;
    $this->view->render('rutas/index');
  }

  public function load ($metodo, $param = null) {

    $ruta = 'source/rutas/'.$metodo.'.php';

    require_once $ruta;
  }

}

?>

 
