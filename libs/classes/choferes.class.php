<?php 

  class ChoferesClass  {
      private $id_chofer;
      private $cedula;
      private $nombre;
      private $apellido;
      private $telefono;
      private $placa;
      

      public function getId() {
        return $this->id_chofer;
      }
      public function getCedula() {
        return $this->cedula;
      }
      public function getNombre() {
        return $this->nombre;
      }
      public function getApellido() {
        return $this->apellido;
      }
      public function getTelefono() {
        return $this->telefono;
      }
      public function getPlaca() {
        return $this->placa;
      }
      

      //SETTERS
      public function setId($id) {
        $this->id_chofer = $id;
      }
      public function setNombre($nombre) {
        $this->nombre = $nombre;
      }
      public function setApellido($apellido) {
        $this->apellido = $apellido;
      }
      public function setCedula($cedula) {
        $this->cedula = $cedula;
      }
      public function setTelefono($telefono) {
        $this->telefono = $telefono;
      }
      public function setPlaca($placa) {
        $this->placa = $placa;
      }
  }

?>