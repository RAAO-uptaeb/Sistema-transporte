<?php

  require 'libs/classes/tipos.class.php';
  require 'source/tipos/CRUD.php';

  class TiposModel extends Model {

    public $tipos;

    function __construct() {
        parent::__construct();
        $this->tipos = new tiposCRUD();
    }

  }

?>