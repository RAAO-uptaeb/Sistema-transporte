<?php

  class choferesCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO choferes (cedula, nombre, apellido, telefono, placa) VALUES(:cedula, :nombre, :apellido, :telefono, :placa)');

        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'telefono'=>$data['telefono'], 'placa'=>$data['placa']]);

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

          $query = $this->db->connect()->prepare('SELECT * FROM choferes WHERE id_choferes = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM choferes');

        }

        while($row = $query->fetch()){
          $item = new ChoferesClass();
          $item->setId($row['id_choferes']);
          $item->setCedula($row['cedula']);
          $item->setNombre($row['nombre']);
          $item->setApellido($row['apellido']);
          $item->setTelefono($row['telefono']);
          $item->setPlaca($row['placa']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    /*********************************************************************************
          GET VEHICULOS
    ********************************************************************************/

    function getVehiculos ( $id = null) {
      $items = [];
      try {

        if ( isset($id) ) {
          //Lo mas probable es que lo quieren condicionar a que solo se muestre los operativos asi que cambien el query
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

        $query = $this->db->connect()->prepare('DELETE FROM choferes WHERE id_choferes = :id');
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
        $query = $this->db->connect()->prepare('UPDATE choferes SET  nombre = :nombre, apellido = :apellido, telefono = :telefono, placa = :placa WHERE cedula = :cedula');
        $query->execute(['cedula'=>$data['cedula'], 'nombre'=>$data['nombre'],  'apellido'=>$data['apellido'], 'telefono'=>$data['telefono'],'placa'=>$data['placa']]);

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
