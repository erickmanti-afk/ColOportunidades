<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$comentarios = $_POST['comentarios'];
$sugerencia = $_POST['sugerencia'];

require ("cnpqrsd.php");
$consulta = "INSERT INTO encuesta VALUES('','$nombre','$apellido','$correo','$comentarios','$sugerencia')";
$resultado = mysqli_query($link, $consulta) or die("<h2>Error de envio</h2>");

echo "<script>alert('Encuesta de satisfaccion enviada correctamente enviada correctamente')</script>";
echo "<script> setTimeout(\"location.href='servicioalcliente.php'\")</script>";