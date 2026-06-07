<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de peticiones</title>
    <link rel="stylesheet" href="peticiones.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
     <style>
        a{
    background: #FC5C7D;
    background: -webkit-linear-gradient(to right, #6A82FB, #FC5C7D);
    background: #3186F5;
    text-align: center;
    display: block;
    width: 100px;
    height: 30px;
    border:none;
    text-decoration: none;
    color:#fff; 
    border-radius: 4px;
    font-size: 16px;
    margin: 10px auto;
    cursor: pointer;
}
        }
    </style>
</head>
<body>

    <form action="consulta.php" method="post">
        <div class="form">
            <h1>Contactanos</h1>
            <div class="grupo">
                <input type="text" name="id" id="" ><span class="barra"></span>
                <label>Id Peticion</label>
            </div>
            <div class="grupo">
                <input type="text" name="nombre" id="" ><span class="barra"></span>
                <label>Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="correo" id="" ><span class="barra"></span>
                <label>Correo</label>
            </div>
            <div class="grupo">
                <input type="text" name="asunto" id="" ><span class="barra"></span>
                <label>Asunto</label>
            </div>
            <div class="grupo">
                <textarea name="mensaje" id="" rows="3" ></textarea><span class="barra"></span>
                <label>Mensaje</label>
            </div>
            <button type="submit" value="Consultar" name="btn2">Consultar</button>
            <a class="boton" href="servicioalclienteadmin.php">Regresar</a>
        </div>
    </form>

<?php
  if (isset($_POST['btn2']))
  {
      include("cnconsulta.php");
      
      $id = $_POST['id'];
      
      $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE idPeticion = $id");
      while($consulta = mysqli_fetch_array($resultados))
      {
          echo
              "
              <table width=\"100%\" border=\"1\">
               <tr>
                <td><b><center>IdPeticion</center></b></td>
                <td><b><center>Nombre</center></b></td>
                <td><b><center>Correo</center></b></td>
                <td><b><center>Asunto</center></b></td>
                <td><b><center>Mensaje</center></b></td>
               </tr>
               <tr>
                <td><center>".$consulta['idPeticion']."</center></td>
                <td><center>".$consulta['nombre']."</center></td>
                <td><center>".$consulta['correo']."</center></td>
                <td><center>".$consulta['asunto']."</center></td>
                <td><center>".$consulta['mensaje']."</center></td>
               </tr>
              </table>
              ";
          

      }
      include("cerrarcnconsulta.php");
  }
?>
</body>
</html>