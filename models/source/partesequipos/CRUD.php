<?php

  class partesequiposCRUD extends Model{

    function __construct() {
      parent::__construct();
    }

    function insert ($data) {
    
        try{
          $query = $this->db->connect()->prepare('INSERT INTO partesequipos (codequipo, codpartes, cantidadparteequipo, estatusparteequipo, codequipopartes) VALUES(:codequipo, :codpartes, :cantidadparteequipo,:estatusparteequipo, :codequipopartes)');

          $query->execute(['codequipo'=>$data['codequipo'], 'codpartes'=>$data['codpartes'],  'cantidadparteequipo'=>$data['cantidadparteequipo'], 'estatusparteequipo'=>$data['estatusparteequipo'], 'codequipopartes'=>$data['codequipopartes']]);
          
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

          $query = $this->db->connect()->prepare('SELECT * FROM partesequipos WHERE codequipo = :id');

          $query->execute(['id'=>$id]);

        } else {

          $query = $this->db->connect()->query('SELECT * FROM partesequipos');

        }

        while($row = $query->fetch()){
          $item = new PartesEquiposClass();

          $item->setCod($row['codequipo']);
          $item->setCodParte($row['codpartes']);
          $item->setCantidadPartes($row['cantidadparteequipo']);

          array_push($items, $item);
        }
        return $items;
      } catch (PDOException $e) {
        return [];
      }
    }

    public function getError () {
      return $this->error;
    }
  }
?>