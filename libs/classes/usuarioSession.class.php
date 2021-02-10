<?php 
  // Clase de usuario para SESSION
  
  class usuarioSession  {
      
    public function __construct() {
      session_start();
    }

    public function setUsuarioActual($usuario) {
      $_SESSION['usuario'] = $usuario;
    }

    public function getUsuarioActual($usuario) {
      return $_SESSION['usuario'];
    }
    
    public function cerrarSession() {
      session_unset();
      session_destroy();
    }
  }

?>