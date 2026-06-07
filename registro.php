<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$barrio = $_POST['barrio'];
if(isset($_POST['subir'])){
$name = $_FILES['archivo']['name'];
$ruta = $_FILES['archivo']['tmp_name'];
$destino = "archivos/" . $name;
    if($name != ""){
        if(copy($ruta, $destino)){
           
        }else{
            echo "Error";
        }
    }
}

require ("conexregistro.php");
$consulta = "INSERT INTO registros VALUES('','$nombre', '$apellido', '$correo','$telefono','$barrio', '$archivo')";
$resultado = mysqli_query($link, $consulta) or die("<h2>Error de envio</h2>");

echo "<script>alert('Registro enviado correctamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\")</script>";