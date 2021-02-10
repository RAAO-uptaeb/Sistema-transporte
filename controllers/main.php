
<?php 

  class Main extends Controller{

    function __construct () {
      parent::__construct();
      
    }

    function render() {

      $this->view->render('main/index');
    }

    public function load ($metodo, $param = null) {

		$ruta = 'source/main/'.$metodo.'.php';

		require_once $ruta;
	}

  }

?>