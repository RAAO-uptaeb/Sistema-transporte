<?php  

  class Reportes extends Controller{
  	public function __construct(){
		parent::__construct();
		$this->view->modelos=[];
		$this->view->partes=[];
	}


	public function render(){

	  $this->view->render('reportes/index');
	}

	public function load ($metodo, $param = null) {

		$ruta = 'source/reportes/'.$metodo.'.php';
	
		require_once $ruta;
	  }
}
?>