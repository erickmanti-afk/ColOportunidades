<?php

$usuario = $_POST['usuario'];
$password = $_POST['contraseña'];
$rol = $_POST['rol'];

require ("conexasignacion.php");
$consulta = "INSERT INTO usuarios VALUES('',$usuario','$password', '$rol')";
$resultado = mysqli_query($link, $consulta) or die("<h2>Error de envio</h2>");

echo "<script>alert('Peticion enviada correctamente')</script>";
echo "<script> setTimeout(\"location.href='crud.php'\")</script>";