<?php

  class usuariosCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO usuarios (cedula, nombre, apellido, usuario, contrasena, rol) VALUES(:cedula, :nombre, :apellido, :usuario, :contrasena, :rol)');

        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'usuario'=>$data['usuario'], 'contrasena'=>$data['contrasena'], 'rol'=>$data['rol']]);

        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
    }

    function get ( $id = null) {
      $items = [];
      try {

        if ( isset($id) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM usuarios WHERE id_usuario = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM usuarios');

        }

        while($row = $query->fetch()){
          $item = new UsuariosClass();

          $item->setId($row['id_usuario']);
          $item->setCedula($row['cedula']);
          $item->setNombre($row['nombre']);
          $item->setApellido($row['apellido']);
          $item->setUsuario($row['usuario']);
          $item->setContrasena($row['contrasena']);
          $item->setRol($row['rol']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function drop ($id) {

      try {

        $query = $this->db->connect()->prepare('DELETE FROM usuarios WHERE id_usuario = :id');
        $query->execute(['id'=>$id]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch ( PDOException $e ) {
        return false;
      }

    }

    function update ($data) {
      try {
        $query = $this->db->connect()->prepare('UPDATE usuarios SET  nombre = :nombre, apellido = :apellido, usuario = :usuario, contrasena = :contrasena, rol = :rol WHERE cedula = :cedula');
        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'usuario'=>$data['usuario'], 'contrasena'=>$data['contrasena'], 'rol'=>$data['rol']]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch (PDOException $e) {
        return false;
      }
    }

    public function getError () {
      return $this->error;
    }
  }

?>
