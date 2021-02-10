<?php 


  class TiposClass  {
      private $id;
      private $nombre_tipo;
      private $descripcion;
      private $tiempo;      

      public function getId() {
        return $this->id;
      }

      public function getNombre() {
        return $this->nombre_tipo;
      }
      public function getDescripcion() {
        return $this->descripcion;
      }
      public function getTiempo() {
        return $this->tiempo;
      }
  

      //SETTERS
      public function setId($id) {
        $this->id = $id;
      }
      public function setNombre($nombre_tipo) {
        $this->nombre_tipo = $nombre_tipo;
      }
      public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
      }
      public function setTiempo($tiempo) {
        $this->tiempo = $tiempo;
      }
 } 

?>