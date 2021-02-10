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
      <div class="loign__form" >
        
        <form class="login__restaurar" method="post" name="formulario" action="<?php echo constant('URL')?>restaurar/actualizar">

          <input class="login_input" type="text" name="cuenta" value="<?php echo $_SESSION['restaurarUsuario'];?>" id="cuenta" disabled/>
          <br>
          <input class="login_input" type="password" name="contrasena" placeholder="Nueva contraseña" id="password1"/>
          <br>
          
          <input class="login_input" type="password" name="contrasena" placeholder="Confirme la contraseña" id="password2"/>
          <br>
          <input type="submit" name="btn" id="btn"  class="boton" value="Actualizar" >
         <input type="button" class="boton" value="Cancelar" onClick="history.go(-2);">
        </form>
      </div>

      
    </main>
    <script type="text/javascript" src="<?php echo constant('URL')?>public/js/validacion/validar_password.js"></script>
  </body>
</html>
