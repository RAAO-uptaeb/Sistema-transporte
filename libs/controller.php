
<?php

  class Controller {

    function __construct() {
      $this->view = new View();
    }

    function loadModel($model, $param = null) {
      $url = 'models/' . $model. 'model.php';

      if( file_exists($url) ) {
        require_once $url;
        $modelName = $model .'Model';
        $this->model = new $modelName();

      }
    }

    //Conigurar usuario y devolver datos a la vista;
    public function setUsuario ($usuario) {
      $query = $this->model->db->connect()->prepare
      ('SELECT * FROM usuarios WHERE usuario = :usuario');
      $query->execute(['usuario' => $usuario]);

      foreach($query as $usuarioActual) {

        $this->view->nombre = $usuarioActual['nombre'];
        $this->view->apellido = $usuarioActual['apellido'];
        $this->view->usuario = $usuarioActual['usuario'];
        $this->view->cedula = $usuarioActual['cedula'];
        $this->view->rol = $usuarioActual['rol'];
      }
    }

  }

?>
