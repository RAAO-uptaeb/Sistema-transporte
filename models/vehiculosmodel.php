<?php

  require 'libs/classes/vehiculos.class.php';
  require 'source/vehiculos/CRUD.php';

  class VehiculosModel extends Model {

    public $vehiculos;

    function __construct() {
        parent::__construct();
        $this->vehiculos = new vehiculosCRUD();
    }

  }

?>