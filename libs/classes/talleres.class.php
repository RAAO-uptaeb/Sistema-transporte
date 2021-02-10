<?php 
    // Clase de talleres para BD

  class TalleresClass  {
      private $id;
      private $rif;
      private $nombre;
      private $direccion;      

      public function getId() {
        return $this->id;
      }
      public function getRif() {
        return $this->rif;
      }
      public function getNombre() {
        return $this->nombre;
      }
      public function getDireccion() {
        return $this->direccion;
      }
  

      //SETTERS
      public function setId($id) {
        $this->id = $id;
      }
      public function setRif($rif) {
        $this->rif = $rif;
      }
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
      public function setDireccion($direccion) {
        $this->direccion = $direccion;
      }
 } 

?>