<?php


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

require ("cnpqrsd.php");
$consulta = "INSERT INTO peticiones VALUES('','$nombre','$correo','$asunto','$mensaje')";
$resultado = mysqli_query($link, $consulta) or die("<h2>Error de envio</h2>");

echo "<script>alert('Peticion enviada correctamente')</script>";
echo "<script> setTimeout(\"location.href='servicioalcliente.php'\")</script>";