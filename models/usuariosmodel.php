<?php

  require 'libs/classes/usuarios.class.php';
  require 'source/usuarios/CRUD.php';

  class UsuariosModel extends Model {

    public $usuarios;

    function __construct() {
        parent::__construct();
        $this->usuarios = new usuariosCRUD();
    }

  }

?>