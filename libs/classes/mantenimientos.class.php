<?php 
    // Clase de mantenimientos para BD

  class MantenimientosClass  {
      private $id_mantenimiento;
      private $nombre_tipo;
      private $placa;
      private $nombre;
      private $costo;
      private $fecha;

      

      public function getId() {
        return $this->id_mantenimiento;
      }
      public function getNombre_tipo() {
        return $this->nombre_tipo;
      }
      public function getPlaca() {
        return $this->placa;
      }
      public function getNombre() {
        return $this->nombre;
      }
      public function getCosto() {
        return $this->costo;
      }
      public function getFecha() {
        return $this->fecha;
      }


      //SETTERS
      public function setId($id_mantenimiento) {
        $this->id_mantenimiento = $id_mantenimiento;
      }
      public function setPlaca($placa) {
        $this->placa = $placa;
      }
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
      public function setNombre_tipo($nombre_tipo) {
        $this->nombre_tipo = $nombre_tipo;
      }
      public function setCosto($costo) {
        $this->costo = $costo;
      }
      public function setFecha($fecha) {
        $this->fecha = $fecha;
      }

  }

?>