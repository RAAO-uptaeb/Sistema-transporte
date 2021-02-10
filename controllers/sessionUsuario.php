<?php 
    // Clase de usuario para BD

  class SessionUsuario extends Controller {
      public $nombre;
      public $rol;
      public $cedula;
      
      //para validar si existe
      public function userExists( $nombre, $contrasena ) {

        $query = $this->model->db->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre AND contrasena = :contrasena');
        $query->execute(['nombre' => $nombre, 'contrasena' => $contrasena]);

        if($query->rowCount()){
          return true;
        } else{
          return false;
        }
      }
      
      //Para configurar los valores
      public function setUsuario ($nombre) {
        $query = $this->model->db->connect()->prepare('SELECT * FROM usuarios WHERE nombre = :nombre');
        $query->execute(['nombre' => $nombre]);

        foreach($query as $usuarioActual) {
          $this->nombre = $usuarioActual['nombre'];
          $this->cedula = $usuarioActual['cedula'];
          $this->rol = $usuarioActual['rol'];
        }
      }

      public function getNombre() {
        return $this->nombre;
      }
  }

?>