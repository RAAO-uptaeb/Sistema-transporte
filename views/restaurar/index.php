<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UT | Recuperar contraseña</title>
     <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
  <body>
     <header class="header">
        <div class="wrapper">
          <div class="logo"></div>
          
          <nav>
            <a href="Manual.pdf" target="blank" title="Manual del sistema">Manual</a>
            <a href="<?php echo constant('URL')?>contacto">Contacto</a>

          </nav>
        </div>
  </header>
    <main>
      
      <div class="login__restaurar" >
         <?php
        if (isset($this->mensaje) ) {
          ?>
          <h2 id="mensaje"> <?php echo $this->mensaje; ?> </h2>
          <?php
        } ?>
        <form class="restaurar__form" method="POST" name="formulario">
          <input
            class="login_input"
            type="text"
            name="nombre"
            placeholder="Nombre"
            id="nombre"
          />
          <br> 
          <input
            class="login_input"
            type="text"
            name="apellido"
            placeholder="Apellido"
            id="apellido"
          />
          <br>
          <input
            class="login_input"
            type="text"
            name="cedula"
            placeholder="Cedula"
            id="cedula"
          />
          <br>
          <button type="submit" name="ingresar" class="boton" value="ingresar">Restaurar contraseña</button>
         <input type="button" class="boton" value="Cancelar" onClick="history.go(-1);">
        </form>
      </div>

      
    </main>
      <script src="<?php echo constant('URL')?>public/js/validacion/restaurar.js"></script>
  </body>
</html>

</html>
