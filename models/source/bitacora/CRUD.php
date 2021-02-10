<?php

  class bitacoraCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }


    public function consultarBitacora(){

      $tabla ="SELECT * FROM bitacora";

      $respuestaArreglo ='';
      try{

        $datos = $this->conexion->prepare($tabla);
        $datos->execute();
        $datos->setFetchMode(PDO::FETCH_ASSOC);
        $respuestaArreglo = $datos->fetchAll(PDO::FETCH_ASSOC);
        return $respuestaArreglo;
      }catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
  }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO bitacora (fecha,hora,accion) VALUES(:fecha, :hora, :acccion)');

        $query->execute(['fecha'=>$data['fecha'], 'hora'=>$data['hora'],  'accion'=>$data['accion']]);

        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
    }

    function get ( $id_bitacora = null) {
      $items = [];
      try {

        if ( isset($id) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM bitacora WHERE id_bitacora = :id_bitacora');

          $query->execute(['id_bitacora'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM bitacora');

        }

        while($row = $query->fetch()){
          $item = new BitacoraModel();

          $item->setIdBitacora($row['id_bitacora']);
          $item->setIdUsuario($row['id_usuario']);
          $item->setFecha($row['fecha']);
          $item->setHora($row['hora']);
          $item->setAccion($row['accion']);
        

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function drop ($id_bitacora) {

      try {

        $query = $this->db->connect()->prepare('DELETE FROM bitacora WHERE id_bitacora = :id_bitacora');
        $query->execute(['id_bitacora'=>$id_bitacora]);

        if ( $query->rowCount() ) {
          return true;
        } else {
          return false;
        }

      } catch ( PDOException $e ) {
        return false;
      }

    }

    function registroSalida ($data) {
      try {
        $query = $this->db->connect()->prepare('UPDATE bitacora SET  hora = :hora WHERE id_bitacora = :id_bitacora');

        $query->execute(['hora'=>$data['hora'], 'id_bitacora'=>$data['id_bitacora'],  'id_usuario'=>$data['id_usuario'], 'fecha'=>$data['fecha'], 'accion'=>$data['accion']]);

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
