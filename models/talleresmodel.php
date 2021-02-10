<?php

  require 'libs/classes/talleres.class.php';
  require 'source/talleres/CRUD.php';

  class TalleresModel extends Model {

    public $talleres;

    function __construct() {
        parent::__construct();
        $this->talleres = new talleresCRUD();
    }

  }

?>