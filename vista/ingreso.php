<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="pagina web del área de talento humano del Tecnológico de Antioquia, institución universitaria">
    <meta name="keywords" content="Sitio web, talento humano, TdeA, Tecnológico Antioquia, Empleados, Docentes, Postulación Docente">
    <meta name="author" content="Alejandro Morales, Felipe Benítez, Andrés López">
    <link rel="icon" type="image/gif" href="iconos/favicon.ico">
    <link rel="stylesheet" type="text/css" href="fonts/style.css">
    <title>Ingreso Usuarios</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.theme.min.css">
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.structure.min.css">
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/styles.css">

<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script type="text/javascript" src="../js/ie-emulation-modes-warning.js"></script>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.min.js"></script> 
  <script src="../js/Propios/main.js"></script>
  
  </head>
  <body>
    <?php
    /* Llama al archivo con la cabecera */
    include_once "header.php"
    ?>   
<div class="alert alert-danger error" role="alert">
  Usuario y/o Contraseña son inválidos, por favor verifique
</div>
      <div class="jumbotron">
        <div class="container">
         <h1 class="featurette-heading" style="text-align:center">Bienvenidos <span class="text-muted">Tecnológico de Antioquia.</span></h1><br><br>
         <p class="lead" style="text-align:center">Ingrese su usuario y contraseña para ingresar al aplicativo </p>
       </div>
     </div>

     <div class="container">
      <form id="formlg" class="form-signin" method="post">     
        <h2 class="form-signin-heading" align="center">Entrar</h2>
        <div class="col-xs-4 col-xs-offset-4"> 
        <div class="form-group" align="center">                
          <input type="text" id="nomusuario" name="nomusuario" class="form-control" placeholder="Nombre de usuario" required=""><!--required autofocus-->
        </div>      
        <div class="form-group" align="center">           
          <label for="inputPassword" class="sr-only">Contraseña</label>
          <input type="password" id="conusuario" name="conusuario" class="form-control" placeholder="Contraseña" required=""><!--required autofocus-->
        </div>   
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordar nombre de usuario.
          </label>
        </div>        
        <button class="btn btn-primary " type="submit" >Entrar</button>   
        <a class="btn btn-warning " href="registro.php" role="button"><span class="icon-add-user"></span>  Registrarse</a>
        </div>     
        </form>
        

    </div> <!-- /container -->
  </div>
  <?php
  include_once "footer.php"
  ?>

     <!-- Bootstrap core JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>-->
     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
   </body>
   </html>
