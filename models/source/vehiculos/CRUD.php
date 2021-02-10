<?php
  class vehiculosCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
    $id= 0;
    $mayor = 0;
      try{
        $query = $this->db->connect()->query('SELECT * FROM vehiculos');
      
        while($row = $query->fetch()){
          $item = new VehiculosClass();

          if ($row['id_vehiculo'] >= $mayor) {
            $mayor = $row['id_vehiculo'];
          }  
        }
          $id = $mayor + 1;

        $query = $this->db->connect()->prepare('INSERT INTO vehiculos (id_vehiculo, placa, modelo, funcionamiento) VALUES(:id_vehiculo, :placa, :modelo, :funcionamiento)');

        $query->execute(['placa'=>$data['placa'], 'modelo'=>$data['modelo'],  'funcionamiento'=>$data['funcionamiento'], 'id_vehiculo'=>$id]);

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

          $query = $this->db->connect()->prepare('SELECT * FROM vehiculos WHERE id_vehiculo = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM vehiculos');

        }

        while($row = $query->fetch()){
          $item = new VehiculosClass();
          $item->setId($row['id_vehiculo']);
          $item->setPlaca($row['placa']);
          $item->setModelo($row['modelo']);
          $item->setFuncionamiento($row['funcionamiento']);
          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function drop ($id) {

      try {

        $query = $this->db->connect()->prepare('DELETE FROM vehiculos WHERE id_vehiculo = :id');
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
        $query = $this->db->connect()->prepare('UPDATE vehiculos SET  modelo = :modelo, funcionamiento = :funcionamiento WHERE placa = :placa');
        $query->execute(['placa'=>$data['placa'],  'modelo'=>$data['modelo'], 'funcionamiento'=>$data['funcionamiento']]);

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
