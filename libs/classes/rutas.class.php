<?php 


  class RutasClass  {
      private $id_ruta;
      private $placa;
      private $nombre;
      private $direccion;
      private $hora_salida;
      

      public function getId() {
        return $this->id_ruta;
      }
    public function getPlaca() {
        return $this->placa;
      }
      public function getNombre() {
        return $this->nombre;
      }
      public function getDireccion() {
        return $this->direccion;
      }
      public function getHoraSalida() {
        return $this->hora_salida;
      }

      //SETTERS
      public function setId($id_ruta) {
        $this->id_ruta = $id_ruta;
      }
     public function setPlaca($placa) {
        $this->placa = $placa;
      }
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
      public function setDireccion($direccion) {
        $this->direccion = $direccion;
      }
      public function setHoraSalida($hora_salida) {
        $this->hora_salida = $hora_salida;
      }

  }

?>