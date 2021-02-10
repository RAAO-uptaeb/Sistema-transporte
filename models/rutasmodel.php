<?php
 require 'libs/classes/vehiculos.class.php';
 require 'libs/classes/rutas.class.php';
 require 'source/rutas/CRUD.php';
 

  class RutasModel extends Model {

    public $rutas;

    function __construct() {
        parent::__construct();
        $this->rutas = new rutasCRUD();

    }

  }

?>