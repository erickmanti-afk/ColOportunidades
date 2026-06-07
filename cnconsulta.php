<?php
$host = "localhost";
$usuariodb = "root";
$clavedb = "16062020";
$basededatos = "col_oportunidades";

$conexion = mysqli_connect($host,$usuariodb,$clavedb,$basededatos) or die ("Error al conectar con el servidor");

$tabla_db1 = "peticiones";
?>