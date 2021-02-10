<?php
 require 'libs/classes/vehiculos.class.php';
 require 'libs/classes/choferes.class.php';
 require 'source/choferes/CRUD.php';
 

  class ChoferesModel extends Model {

    public $choferes;

    function __construct() {
        parent::__construct();
        $this->choferes = new choferesCRUD();

    }

  }

?>