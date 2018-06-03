<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
  	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../../js/jquery-ui.min.js"></script>
</head>
<body>
<div class="container" style="border-top: none;
    border-bottom: none;
    border-width: 1px;
    border-style: ridge;">  
  <div class="jumbotron"> 
    <div align="center">
       	<img src="../../imagenes/Banner.jpg" alt="Banner" width=100% >
    </div>
  </div>
</div>
<div id="navbar" class="collapse navbar-collapse">
<div>
<?php session_start(); echo "¡Bienvenido!  "; echo "<strong>".$_SESSION['username']."</strong>"; ?>
</div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="Coordinador_panel.php"><span class="icon-home"></span>HOME</a></li>  
      <li><a href="link2.php"><span class="icon-graduation-cap"></span>Link 2</a></li>
      <li><a href="descargas.php"><span class="icon-download"></span>Documentos de Interes</a></li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PERFIL <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cambiar Clave</a></li>
            <li><a href="#">Actualizar Datos</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="#">Contáctenos</a></li>            
          </ul>
        </li>     
      <li><a href="../../controlador/cerrarSesion.php" target="_blank"><span class="icon-clipboard"></span>SALIR</a></li>
      </ul>
</div>
<div id="content">
	
</div>
</body>
</html>