<?php 
session_start();

//Si nadie inció sesión vuelve a la pag de Login
if ($_SESSION["s_usuario"] === null){
	header("Location: login.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
      
        
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <title>COL OPORTUNIDADES</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background: url(imagenes/logo.jpg);
      }


      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body style="text-align:justify;">
    <header>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <a class="navbar-brand"href="#">COL OPORTUNIDADES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="demo.php">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mision2.html">MISION</a>
                <li class="nav-item">
          <a class="nav-link" href="vision2.html">VISION</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="clasificados.php">CLASIFICADOS</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="servicioalcliente.php">SERVICIO AL CLIENTE</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
      </form>
    </div>
  </nav>
</header>
      <br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <div class="jumbotron">
           <h1 class="display-4 text-center">Permisos</h1>
          <h2 class="text-center">Usuario: <span class="badge badge-success"><?php echo $_SESSION["s_usuario"];?></span></h2>    
          <p class="lead text-center">Usted NO tiene permisos de ADMINISTRADOR</p>          
          <h2 class="text-center">Su permiso es: <span class="badge badge-warning"><?php echo $_SESSION["s_rol_descripcion"];?></span></h2>  
          <hr class="my-4">          
          
        </div>
        </div>
    </div>
</div>  
        
<br>    
        
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="codigo.js"></script>
<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>ES UN PLACER SALUDARTE.</h1>
              <br>
              <br>
              <br>
            <p>Ingresaste al sistema de col oportunidades, donde podrás encontrar múltiples servicio los cuales podrás adquirir mediante un acuerdo, podrás escoger entre un rol cliente y un rol ofertante, si eres cliente podrás adquirir servicios que estés necesitando en el momento, y si eres un ofertante podrás publicar servicios para promocionar tu trabajo informal o profesional, todo esto y mas podrás encontrarlo en col oportunidades una plataforma hecha para trabajadores.</p>
            
          </div>
        </div>
      </div>
      
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

 <br><br>

  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
        <img style="width: 140px; height: 140px;" src="cliente2.jpeg">
        <h2>CLIENTE.</h2>
        <p style="text-align:justify;">El es gabriel, un cliente satisfecho inscrito en nuestro sistema, ¿que esperas tu para unirte como cliente? </p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img style="width: 140px; height: 140px;" src="ofertante.jpeg">
        <h2>OFERTANTE.</h2>
        <p style="text-align:justify;">El es francisco, como muchos busco una manera de poder promocionar su trabajo, y en nuestra plataforma amiga con los trabajadores lo encontro y ahora puede generar algo mas de dinero en su trabajo,¿que esperas para ser un ofertante?</p>
       
      </div>
      <div class="col-lg-4">
        <img style="width: 140px; height: 140px;" src="cliente1.jpeg">
        <h2>CLIENTE.</h2>
        <p style="text-align:justify;">Ella es andrea y como tu busco maneras de comunicarse con un tecnico que le pdiera arreglar su computadora, pero no lo encontro, hasta que encontro su plataforma aliada col oportunidades y solo con dar un click, ahora andrea puede disfrutar de su computadora.¿que esperas para unirte?</p>
        
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¿QUE PUEDO ENCONTRAR EN <span class="text-primary"> COL OPORTUNIDADES.?</span></h2>
        <p class="lead">En col oportunidades puedes encontrar multiples servicios que adquirir y multiples productos que comprar.</p>
      </div>
      <div class="col-md-5">
       <img style="width: 450px; height: 450px;" src="logo.jpeg">
      </div>
    </div>

  <footer style="border-color: black" class="container">
    <a class="btn btn-danger btn-lg" href="index.html" role="button">Cerrar Sesion</a>
    <br><br>
      
    <p >&copy;2020-2022 COL OPORTUNIDADES &middot; <a href="#">PRIVADOS</a> &middot; <a href="#">TERMINOS</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
