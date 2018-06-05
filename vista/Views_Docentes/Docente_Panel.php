<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
  	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../../js/Propios/panel.js"></script>
  	<script type="text/javascript" src="../../js/Propios/Panel_Doc.js"></script>
  	<script type="text/javascript" src="../../js/Propios/jquery.js"></script>
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
      <li class="active"><a href="Docente_Panel.php"><span class="icon-home"></span>HOME</a></li>  
      <li><a href="link2.php"><span class="action icon-graduation-cap"></span>Link 2</a></li>
      <li><a href="descargas.php"><span class="action icon-download"></span>Documentos de Interes</a></li>
      <li class="dropdown">
          <a class="action dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PERFIL <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="action" href="prueba.php">Cambiar Clave</a></li>
            <li><a class="action" href="prueba.php">Actualizar Datos</a></li>            
            <li role="separator" class="divider"></li>
            <li><a class="action" href="#">Contáctenos</a></li>            
          </ul>
        </li>     
      <li><a href="../../controlador/cerrarSesion.php" target="_blank"><span class="icon-clipboard"></span>SALIR</a></li>
      </ul>
</div>
<div id="modal" role="dialog">
	
</div>
<div class="container">
<table class="table table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Código Asignatura</th>
      <th scope="col">Asignatura</th>
      <th scope="col">Grupo</th>
      <th scope="col">Matriculados</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody id="tabla">
    
  </tbody>
</table>
</div>
</body>
</html>