<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title></title>
</head>
<body>
 <header class="header">
    <div class="wrapper">
     
        <table class="icono_usuario">
          <tr>
            <td><div class="logo"></div> </td>
            <td><p style="color: white;"><?php echo $this->nombre.' - Rol:  '. $this->rol; ?></p></td>
          </tr>
        </table>       
   
        <nav>
          <a href="Manual.pdf" target="blank" title="Manual del sistema">Manual</a>
          <a href="<?php echo constant('URL')?>main">Inicio</a>     
        </nav>
    </div>
       <?php require 'views/menu.php'; ?>
  </header>
</body>
</html>
