<?php

  require 'libs/classes/usuarios.class.php';

  class RestaurarModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function usuarioExiste ($nombre, $apellido, $cedula) {
 
      try {
        $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre AND apellido = :apellido AND cedula = :cedula');

         $query->execute(['nombre' => $nombre,'apellido' => $apellido,  'cedula' => $cedula]);

         if ( $query->rowCount() ) {
          return true;

         } else {
          return false;
         }

      } catch (PDOException $e) {
        return false;
      }
    }
    function cambiar($contrasena){
       try {
        $query = $this->db->connect()->prepare(' UPDATE usuarios SET contrasena = :contrasena WHERE cedula = :cedula');
        
        $query->execute(['contrasena' => $contrasena, 'cedula' => $_SESSION['restaurarUsuario']]);

        return true;
      } catch (PDOException $e) {
        echo "Error en: ".$e;
        return false;
      }

    }
}

?>