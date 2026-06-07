<?php
include_once '/bd/conexionc.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, nombre, apellido, correo, telefono, barrio FROM personas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="shortcut icon" href="#">
        <title>CENTRO DE DATOS</title>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    </head>
    <body><br>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <a class="navbar-brand"href="#">COL OPORTUNIDADES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="inicioadmin.php">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mision3.html">MISION</a>
                <li class="nav-item">
          <a class="nav-link" href="vision3.html">VISION</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="crud.php">USUARIOS</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="clasificadosadmin.php">CLASIFICADOS</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="servicioalclienteadmin.php">SERVICIO AL CLIENTE</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
      </form>
    </div>
  </nav>
        </header><br><br>
        
        <p><h4 class="text-center text-dark">CRUD de las <span class="badge badge-primary">Personas en el sistema</span></h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width: 100%">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Barrio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['apellido'] ?></td>
                                <td><?php echo $dat['correo'] ?></td> 
                                <td><?php echo $dat['telefono'] ?></td> 
                                <td><?php echo $dat['barrio'] ?></td> 
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="apellido" class="col-form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido">
                </div>                
                <div class="form-group">
                <label for="correo" class="col-form-label">Correo:</label>
                <input type="text" class="form-control" id="correo">
                </div>
                <div class="form-group">
                <label for="telefono" class="col-form-label">Telefono:</label>
                <input type="number" class="form-control" id="telefono">
                </div> 
                <div class="form-group">
                <label for="barrio" class="col-form-label">Barrio:</label>
                <input type="text" class="form-control" id="barrio">
                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
        </div><br><br>
        <footer style="border-color: black" class="container">
    <a class="btn btn-primary" href="MPDF/reporteusuarios.php" target="_blank" role="button">REPORTE EN PDF</a>
            <br>
            <br>
    <a class="btn btn-danger btn-lg" href="index.html" role="button">Cerrar Sesion</a>
    <br><br>
      
    <p >&copy;2020-2022 COL OPORTUNIDADES &middot; <a href="#">PRIVADOS</a> &middot; <a href="#">TERMINOS</a></p>
  </footer>
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="datatables/datatables.min.js"></script>    
        <script type="text/javascript" src="main.js"></script> 
    </body>
</html>