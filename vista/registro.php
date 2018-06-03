<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="pagina web del Tecnológico de Antioquia, institución universitaria">
  <meta name="keywords" content="Sitio web, TdeA, Tecnológico Antioquia">
  <meta name="author" content="Sebastián Gómez">
  <link rel="icon" type="image/gif" href="../iconos/favicon.ico">
  <link rel="stylesheet" type="text/css" href="../fonts/style.css">
  <title>Registro Usuarios</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link rel="stylesheet" type="text/css" href="../css/ie10-viewport-bug-workaround.css">
  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  
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
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
   <?php
    /* Llama al archivo con la cabecera */
    include_once "header.php"
    ?> 

  

  
    <div class="jumbotron">
      <div class="container">
        <h1 class="featurette-heading">Registro <span class="text-muted"> para el Tecnológico de Antioquia.</span></h1><br><br>
        <p class="lead">Realice el registro para luego poder acceder a la web y así continuar diligenciando el formulario de  convocatoria docente. </p> 
      </div>  
    </div>

    <form id="preRegistro" action="../controlador/registro.php" method="post">
    <div class="form-group">
    <fieldset class="leyenda" > <legend class="stiloLeyenda">Datos Personales</legend>
      <div class="col-xs-12 col-sm-6 ">
        <div class="form-group">
            <label for="NombreCompleto">Nombre Completo<span><em>(requerido)</em></span></label>
            <input type="text" class="form-control" id="NombreCompleto" placeholder="Nombre Completo" name="txtNombre" required>
        </div>
        <div class="form-group">
            <label for="Apellidos">Apellidos<span><em>(requerido)</em></span></label>
            <input type="text" class="form-control" id="Apellidos" placeholder="Apellidos" name="txtApellidos" required>
        </div>

        <div class="form-group">
            <label for="TipoDocumento">Tipo de Documento<span><em>(requerido)</em></span></label>
             <select class="form-control" name="txtTipoID">
            <option value="">-- Seleccione --</option>
            <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
            <option value="Documento Extranjería">Documento de Extranjería</option>
            <option value="Registro Civil">Registro Civil</option>
            <option value="Pasaporte">Pasaporte</option>
          </select> 
        </div>

        <div class="form-group">
            <label for="NumeroDocumento">Número documento de Identidad<span><em>(requerido)</em></span></label>
            <input type="number" class="form-control" id="NombreCompleto" name="txtDocumento" placeholder="Documento de Identidad" required>
        </div>
        <div class="form-group">
            <label for="FechaNacimiento">Fecha de Nacimiento<span><em>(requerido)</em></span></label>
            <input type="date" class="form-control" id="FechaNacimiento" placeholder="Fecha de Nacimiento" name="txtFecha" required>
        </div>
        <div class="form-group">
            <label for="Genero">Género<span><em>(requerido)</em></span></label>
            <select class="form-control" name="txtGenero" >
            <option value="">-- Seleccione --</option>
            <option value="Cédula de Ciudadanía">Masculino</option>
            <option value="Cédula de Extranjería">Femenino</option>
            <option value="Documento Extranjería">Otro</option>           
          </select> 
        </div>

      </div>

      <div class="col-xs-12 col-sm-6 ">
        <div class="form-group">
            <label for="E-mail">Correo Electrónico<span><em>(requerido)</em></span></label>
            <input type="email" class="form-control" id="E-Mail" name="txtEmail" placeholder="Correo Electrónico" required>
        </div>
        <div class="form-group">
            <label for="Celular">Teléfono Celular</label>
            <input type="tel" class="form-control" id="Celular" name="txtCelular" placeholder="Celular" >
        </div>
        <div class="form-group">
            <label for="Fijo">Teléfono Fijo</label>
            <input type="tel" class="form-control" id="Fijo" name="txtFijo" placeholder="Teléfono Fijo" >
        </div>
        <div class="form-group">
            <label for="Fijo">Dirección</label>
            <input type="text" class="form-control" id="Fijo" name="txtDireccion" placeholder="Dirección" >
        </div>
        <div class="form-group">
            <label for="Fijo">Contraseña<span><em>(requerido)</em></span></label>
            <input type="password" class="form-control" id="Contra" name="txtContrasena" minlength="5" placeholder="Contraseña" required>
        </div>
         <div class="form-group">
            <label for="Fijo">Confirmar Contraseña<span><em>(requerido)</em></span></label>
            <input type="password" class="form-control" id="Fijo" name="txtConfContrasena" minlength="5" placeholder="Confirme Contraseña" required>
        </div>
      </div>

      <div class="col-xs-12 col-sm-10 " style="margin-top: 20px">
        <div class="form-group">
          <button class="btn btn-primary" type="submit" style="margin-right:12px"><span class="icon-user-check"></span>  Registrarse</button>
          <button class="btn btn-default" type="reset"><span class="icon-cw"></span>  Restablecer</button>
        </div>
      </div>
      
    </fieldset>

  </form>
</section>
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
