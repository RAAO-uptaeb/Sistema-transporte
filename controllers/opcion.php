<?php 

class Opcion extends Controller{

  function __construct () {
    parent::__construct();
  }

  function render () {

    $this->view->render('opcion/index');
  }


}

?>