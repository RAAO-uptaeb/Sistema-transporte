<?php 
    // Clase de usuario para BD

  class VehiculosClass  {
      private $id;
      private $placa;
      private $modelo;
      private $funcionamiento;

      public function getID() {
        return $this->id;
      }

      public function getPlaca() {
        return $this->placa;
      }
      public function getModelo() {
        return $this->modelo;
      }
      public function getFuncionamiento() {
        return $this->funcionamiento;
      }


      //SETTERS
       public function setId($id) {
        $this->id = $id;
      }
      public function setPlaca($placa) {
        $this->placa = $placa;
      }
      public function setModelo($modelo) {
        $this->modelo = $modelo;
      }
      public function setFuncionamiento($funcionamiento) {
        $this->funcionamiento = $funcionamiento;
      }
}    
?>