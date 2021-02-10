<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<?php echo constant('URL')?>public/img/uptaeb1.png" rel="shortcut icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UT | UPTAEB</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/main.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/css/inicio.css">
    </head>
<body>
  <?php require 'views/header.php'; ?>

    <div class="text-header">
             <center><h2>Bienvenido al sistema UT</h2></center>
         </div>

  
  <div class="container">

     <div class="main">
    <div class="slides">
      <img src="<?php echo constant('URL')?>public/img/slider/1.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/2.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/3.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/4.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/5.jpg" alt=""> 
      <img src="<?php echo constant('URL')?>public/img/slider/6.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/7.jpg" alt="">
      <img src="<?php echo constant('URL')?>public/img/slider/8.jpg" alt="">
    </div>
  </div>
    <main>
       
        <div class="tablaAlerta" id="form">
          <table>
            <tr>
            <th colspan="3">Alertas del sistema</th>
            </tr>
            <tr> <th>Vehiculo</th><th>Chofer</th><th>Mantenimiento</th>
              <tr>
                <td>AS1-123</td>
                <td>Rafael Dominguez</td>
                <td>Cambio de aceite</td>
              </tr>
               <tr>
                <td>VAS-123</td>
                <td>Carlos Mesa</td>
                <td>Cambio de bateria</td>
              </tr>
               <tr>
                <td>ATE-123</td>
                <td>Miguel Mendi</td>
                <td>Cambio de caucho</td>
              </tr>
               <tr>
                <td>HAF-124</td>
                <td>Santiago Solari</td>
                <td>Cambio de aceite</td>
              </tr>
              <tr>
                <td>LKA-124</td>
                <td>Ramon Cortez</td>
                <td>Cambio de bujias</td>
              </tr>
              <tr>
                <td>ASF-124</td>
                <td>Jose Fernandez</td>
                <td>Cambio de bujias</td>
              </tr>
          </table>
      </div>
     


      </div>
    </div>
    </main>
  </div>
  <script src="<?php echo constant('URL')?>public/js/slider/jquery.js"></script>
  <script src="<?php echo constant('URL')?>public/js/slider/jquery.slides.js"></script>
    <script>
 
 
  </script>
</body>
</html>
