<?php
  require 'libs/classes/bitacora.class.php';
  require 'libs/classes/usuarios.class.php';
  require 'source/bitacora/CRUD.php';

  class BitacoraModel extends Model {

    public $bitacora;
  
    function __construct() {
        parent::__construct();
        $this->bitacora = new bitacoraCRUD();
  
    }



      
 }



?>