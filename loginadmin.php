<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="a" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Login</title>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="">
        
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">      
    </head>
    <body>
        <header>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <a class="navbar-brand"href="#">COL OPORTUNIDADES</a>
    <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mision.html">MISION</a>
                <li class="nav-item">
          <a class="nav-link" href="vision.html">VISION</a>
        </li>
            <li class="nav-item">
          <a class="nav-link" href="registrarse.php" target="_blank">REGISTRARSE</a>
        </li>
              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INICIAR SESION
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">USUARIO</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="loginadmin.php">ADMINISTRADOR</a>
        </div>
      </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">BUSCAR</button>
      </form>
    </div>
  </nav>
</header>
        <br><br>
        <div id="login">
            <br>
            <br>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-time-center">
                    <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-light- text-dark">
                        <form id="formlogin" class="form" action="" method="post"> 
                            <h3 class="text-center text-black">Iniciar sesión</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-black">Usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contraseña" class="text-black">Contraseña</label>
                                <input type="password" name="contraseña" id="contraseña" class="form-control">
                            
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Ingresar">
                                 <br><br>
                                <a class="btn btn-danger btn-lg" href="index.html" role="button">Regresar</a>
                            </div>                        
                        </form>
                        
                    
                    </div>
                    </div>
                
                </div>
            </div>
        
        </div>
        
        
        
        
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="codigoadmin.js"></script>
    </body>
</html>