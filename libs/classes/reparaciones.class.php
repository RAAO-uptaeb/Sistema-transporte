<?php 

  class ReparacionesClass  {
      private $id_reparacion;
      private $nombre;
      private $placa;
      private $costo;
      private $fecha;
      private $descripcion;
      
      public function getId() {
        return $this->id_reparacion;
      }
      public function getNombre() {
        return $this->nombre;
      }
      public function getPlaca() {
        return $this->placa;
      }
      public function getCosto() {
        return $this->costo;
      }
      public function getFecha() {
        return $this->fecha;
      }
      public function getDescripcion() {
        return $this->descripcion;
      }
      

      //SETTERS
      public function setId($id) {
        $this->id_reparacion = $id;
      }
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
      public function setPlaca($placa) {
        $this->placa = $placa;
      }
      public function setCosto($costo) {
        $this->costo = $costo;
      }
      public function setFecha($fecha) {
        $this->fecha = $fecha;
      }
      public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
      }
  }

?>