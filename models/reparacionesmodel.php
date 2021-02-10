<?php
 require 'libs/classes/vehiculos.class.php';
  require 'libs/classes/talleres.class.php';
 require 'libs/classes/reparaciones.class.php';
 require 'source/reparaciones/CRUD.php';
 

  class ReparacionesModel extends Model {

    public $reparaciones;

    function __construct() {
        parent::__construct();
        $this->reparaciones = new reparacionesCRUD();

    }

  }

?>