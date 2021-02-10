<?php
  require 'libs/classes/vehiculos.class.php';
  require 'libs/classes/talleres.class.php';
  require 'libs/classes/tipos.class.php';
  require 'libs/classes/mantenimientos.class.php';
  require 'source/mantenimientos/CRUD.php';

  class MantenimientosModel extends Model {

    public $mantenimientos;

    function __construct() {
        parent::__construct();
        $this->mantenimientos = new mantenimientosCRUD();
    }

  }

?>