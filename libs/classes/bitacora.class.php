<?php
  class BitacoraClass extends Model {

    public $id_bitacora;
    public $id_usuario;
    public $fecha;
    public $hora;
    public $accion;


    function __construct() {
        parent::__construct();
  
    }


      public function getIdBitacora() {
        return $this->id_bitacora;
      }
      public function getIdUsuario() {
        return $this->id_usuario;
      }
       public function getFecha() {
        return $this->fecha;
      }
      public function getHora() {
        return $this->hora;
      }
      public function getAccion() {
        return $this->accion;
      }
    
     //SETTERS
      public function setIdBitacora($id_bitacora) {
        $this->id_bitacora = $id_bitacora;
      }
      public function setUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
      }
      public function setFecha($fecha) {
        $this->fecha = $fecha;
      }
      public function setHora($hora) {
        $this->hora = $hora;
      }
      public function setAccion($accion) {
        $this->accion = $accion;
      }
      
 }



?>