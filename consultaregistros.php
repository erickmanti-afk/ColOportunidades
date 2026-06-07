<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de registros</title>
    <link rel="stylesheet" href="consultas.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
</head>
<body>

    <form action="consultaregistros.php" method="post" enctype="multipart/form-data">
        <div class="form">
            <h1>Registros nuevos</h1>
            <div class="grupo">
                <input type="text" name="id" id="" ><span class="barra"></span>
                <label>Id registro</label>
            </div>
            
            <button type="submit" value="Consultar" name="btn2">Consultar</button>
        </div>
            </form>

<?php
  if (isset($_POST['btn2']))
  {
      include("cnconsultaregistros.php");
      
      $id = $_POST['id'];
      
      $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE idRegistro = $id");
      while($consulta = mysqli_fetch_array($resultados))
      {
          echo
              "
              <table width=\"100%\" border=\"1\">
               <tr>
                <td><b><center>IdRegistro</center></b></td>
                <td><b><center>Nombre</center></b></td>
                <td><b><center>Apellido</center></b></td>
                <td><b><center>Correo</center></b></td>
                <td><b><center>Telefono</center></b></td>
                <td><b><center>Barrio</center></b></td>
               </tr>
               <tr>
                <td><center>".$consulta['idRegistro']."</center></td>
                <td><center>".$consulta['nombre']."</center></td>
                <td><center>".$consulta['apellido']."</center></td>
                <td><center>".$consulta['correo']."</center></td>
                <td><center>".$consulta['telefono']."</center></td>
                <td><center>".$consulta['barrio']."</center></td>
               </tr>
              </table>
              ";
          

      }
      
  }
?>
</body>
</html>