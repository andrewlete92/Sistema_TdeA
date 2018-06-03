    
  <div class="container" style="border-top: none;
    border-bottom: none;
    border-width: 1px;
    border-style: ridge;">  
  <div class="jumbotron"> 
        <div align="center">
        <img src="../imagenes/Banner.jpg" alt="Banner" width=100% >
      </div>
      </div>
    
    <div class="container">  
    <nav class="navbar navbar-default">          
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <?php
          session_start();
          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo "¡Bienvenido!  "; 
          echo $_SESSION['username'];
        } else {
        echo "TECNOLÓGICO DE ANTIOQUIA";
      }
      ?>
    </a>
  </div>
  <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="icon-home"></span>  Inicio</a></li> 
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Desplegable <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>            
            <li role="separator" class="divider"></li>
            <li><a href="#">Link Separado</a></li>            
          </ul>
        </li>       
      <li><a href="link2.php"><span class="icon-graduation-cap"></span>Link 2</a></li>
      <li><a href="descargas.php"><span class="icon-download"></span>Documentos de Interes</a></li>
      <li><a href="../descargas/Tutorial.pdf" target="_blank"><span class="icon-clipboard"></span> Manual de Usuario</a></li>
      </ul>
      <form class="navbar-form navbar-right">
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                ?>
                <a class="btn btn-default" href="../controlador/cerrarSesion.php" role="button"><span class="icon-log-out"></span>  Salir</a>
                <?php                
              }else { 
              ?>
              <a class="btn btn-default" href="ingreso.php" role="button"><span class="icon-login"></span>  Entrar</a>             
              <?php     
            }
            ?>
          </form>             
        </div>      
    </nav>
    </div>

    <div class="container"> 
      <div class="row">
      <div class="col-xs-12 col-md-4 ">
        <img src="../imagenes/logo-ppal.jpg" width=100% alt="logo"  >
      </div>      
      <div class="hidden-sm hidden-xs col-md-4"  ">
        <img src="../imagenes/gel2.jpg" width=100% alt="escudos"  >
      </div>   
      <div class="hidden-xs col-md-4 ">
         <h1> Espacio para noticias </h1>
      </div>  
    </div>
  
