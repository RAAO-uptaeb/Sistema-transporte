<?php

  class reparacionesCRUD extends Model{

    public $error;

    function __construct() {
      parent::__construct();
    }

    public  function insert ($data) {
      try{
        $query = $this->db->connect()->prepare('INSERT INTO reparaciones (placa, nombre, descripcion, costo, fecha) VALUES(:placa, :nombre, :descripcion, :costo, :fecha)');

        $query->execute(['placa'=>$data['placa'], 'nombre'=>$data['nombre'],  'descripcion'=>$data['descripcion'], 'costo'=>$data['costo'], 'fecha'=>$data['fecha']]);

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

          $query = $this->db->connect()->prepare('SELECT * FROM reparaciones WHERE id_reparaciones = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM reparaciones');

        }

        while($row = $query->fetch()){
          $item = new ReparacionesClass();
          $item->setId($row['id_reparaciones']);
          $item->setNombre($row['nombre']);
          $item->setPlaca($row['placa']);
          $item->setCosto($row['costo']);
          $item->setFecha($row['fecha']);
          $item->setDescripcion($row['descripcion']);

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

        if ( isset($placa) ) {
          //Lo mas probable es que lo quieren condicionar a que solo se muestre los operativos asi que cambien el query
          $query = $this->db->connect()->prepare('SELECT * FROM vehiculos WHERE placa = :placa');

          $query->execute(['placa'=>$placa]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM vehiculos');

        }

        while($row = $query->fetch()){
          $item = new VehiculosClass();
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
/*********************************************************************************
          GET Talleres
    ********************************************************************************/

    function getTalleres ( $rif = null) {
      $items = [];
      try {

        if ( isset($rif) ) {
   
          $query = $this->db->connect()->prepare('SELECT * FROM taller WHERE rif = :rif');

          $query->execute(['rif'=>$rif]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM taller');

        }

        while($row = $query->fetch()){
          $item = new TalleresClass();
          $item->setRif($row['rif']);
          $item->setNombre($row['nombre']);
          $item->setDireccion($row['direccion']);
          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    function drop ($id) {

      try {

        $query = $this->db->connect()->prepare('DELETE FROM reparaciones WHERE id_reparaciones = :id');
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
        $query = $this->db->connect()->prepare('UPDATE reparaciones SET  nombre = :nombre, descripcion = :descripcion, costo = :costo, fecha = :fecha, placa = :placa WHERE id_reparaciones = :id_reparaciones');
  

        $query->execute(['id_reparaciones'=>$data['id_reparaciones'], 'nombre'=>$data['nombre'],  'descripcion'=>$data['descripcion'], 'costo'=>$data['costo'],'fecha'=>$data['fecha'],'placa'=>$data['placa']]);

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
