<?php

$rol = $_POST['rol'];


require ("conexrol.php");
$consulta = "INSERT INTO roles VALUES('$rol')";
$resultado = mysqli_query($link, $consulta) or die("<h2>Error de envio</h2>");

echo "<script>alert('Peticion enviada correctamente')</script>";
echo "<script> setTimeout(\"location.href='crud.php'\")</script>";