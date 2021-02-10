<?php

  class LoginModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function usuarioExiste ( $usuario, $contrasena ) {

      try {
        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena');
        $query->execute(['usuario' => $usuario, 'contrasena' => $contrasena]);

        return $query->rowCount();
      } catch(PDOException $e) {
        return false;
      }

    }
  }

?>