<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags--> 
  <meta name="description" content="Aplicativo web para ... del TdeA">
  <meta name="keywords" content="Sitio web,, TdeA, Tecnológico Antioquia">
  <meta name="author" content="Sebastián Gómez">
  <link rel="icon" type="image/gif" href="iconos/favicon.ico">
  <link rel="stylesheet" type="text/css" href="fonts/style.css">
  <title>Título de la Página</title>
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.theme.min.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.structure.min.css">
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script type="text/javascript" src="../js/ie-emulation-modes-warning.js"></script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.min.js"></script>  
  
</head>
<body>  
   <!-- /MENSAJE DE BIENVENIDA -->
    
 
    <?php
    /* Llama al archivo con la cabecera */
    include_once "header.php"
    ?>
    
      <div class="row">
        <div class="col-xs-12 col-md-8 ">
          <img src="../imagenes/inscribete-vallavirtual01.jpg" alt="logo" width=100%  >
        </div> 
          <div class="col-xs-12 col-md-4 ">
            <div class="row">               
              <img src="../imagenes/VV-01-35.jpg" alt="logo" width=100% >
            </div>
            <div class="row"> 
              <img src="../imagenes/VV-02-rendicion.jpg" alt="logo" width=100% >
            </div>
          </div>
    </div> 
     <div class="row">
        <div class="hidden-sm hidden-xs col-xs-12 col-md-3 ">
          <img src="../imagenes/VV-04-apuntes2.jpg" alt="logo" width=100%  >
        </div> 
        <div class="hidden-sm hidden-xs col-xs-12 col-md-3 ">
          <img src="../imagenes/VV-05-maestria.jpg" alt="logo" width=100%  >
        </div>
        <div class="hidden-sm hidden-xs col-xs-12 col-md-3 ">
          <img src="../imagenes/VV-06-especializacion.jpg" alt="logo" width=100%  >
        </div>
        <div class="hidden-sm hidden-xs col-xs-12 col-md-3 ">
          <img src="../imagenes/VV-07-radio2.jpg" alt="logo" width=100%  >
        </div>
    </div> 
  



    <div class="row">
      <h1> Espacio para noticias </h1><br>
      <h2> Ejemplo de texto de tamaño dos </h2><br>
      <h3> Ejemplo de texto tamaño tres </h3><br>
      <h4> Ejemplo de texto tamaño cuatro </h4><br>
    </div>


<?php

include_once '../controlador/conexion.php';
   $registros=mysql_query("SELECT  `codigo`,`nombre`, `descripcion` FROM `convocatorias`  ",$conexion) or die("Problemas en el select: ".mysql_error()); 

?>
    <div class="row">
      <div class="table-responsive">
      <table class="table table-striped table-hover">         
        <thead>
          <th>codigo</th>
          <th>nombre</th> 
          <th>descripcion</th>
        </thead>
        <tbody>
          <?php
         while ($reg=mysql_fetch_array($registros))
       {   
        ?>
        <tr>
          <td><?php echo $reg[codigo] ?></td>
           <td><?php echo $reg[nombre] ?></td>
           <td><?php echo $reg[descripcion] ?></td>
        </tr>
         <?php
         }
        ?>       
        </tbody>
      </table>
      </div>
    </div>

  <?php  
  include_once "footer.php"
  ?>
</div>

   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>-->
   <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
 </body>
 </html>





