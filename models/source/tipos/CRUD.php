<?php
 
  class tiposCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
    $id= 0;
    $mayor = 0;
      try{
        $query = $this->db->connect()->query('SELECT * FROM tipos');

        while($row = $query->fetch()){
          $item = new TiposCLass();

          if ($row['id_tipos'] >= $mayor) {
           $mayor = $row['id_tipos'];
          }  
        }
          $id = $mayor + 1;

        $query = $this->db->connect()->prepare('INSERT INTO tipos (id_tipos, nombre_tipo, descripcion, tiempo) VALUES(:id_tipos, :nombre_tipo, :descripcion, :tiempo )');

        $query->execute(['id_tipos'=>$id, 'nombre_tipo'=>$data['nombre_tipo'], 'descripcion'=>$data['descripcion'],  'tiempo'=>$data['tiempo']]);

        return true;
      } catch(PDOException $e){
        $this->error = $e->getMessage();
        return false;
      }
    }

    function get ( $nombre_tipo = null) {
      $items = [];
      try {

        if ( isset($nombre_tipo) ) {

          $query = $this->db->connect()->prepare('SELECT * FROM tipos WHERE nombre_tipo = :nombre_tipo');

          $query->execute(['nombre_tipo'=>$nombre_tipo]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM tipos');

        }

        while($row = $query->fetch()){
          $item = new TiposCLass();
          $item->setId($row['id_tipos']);
          $item->setNombre($row['nombre_tipo']);
          $item->setDescripcion($row['descripcion']);
          $item->setTiempo($row['tiempo']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function drop ($id) {

      try {

        $query = $this->db->connect()->prepare('DELETE FROM tipos WHERE id_tipos = :id');
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
        $query = $this->db->connect()->prepare('UPDATE tipos SET  descripcion = :descripcion, tiempo = :tiempo WHERE nombre_tipo = :nombre_tipo');
        $query->execute(['nombre_tipo'=>$data['nombre_tipo'], 'descripcion'=>$data['descripcion'],  'tiempo'=>$data['tiempo']]);

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
