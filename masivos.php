<?php

$correos = array("erickmanti@gmail.com","emantilla626@misena.edu.co");
to=implode(",",$correos);
$titulo = "Mensaje de prueba";
$mensaje = "Esta es una prueba de correos masivos";
$encabezado = "Enviado por Col Oportunidades";
mail($to,$titulo,$mensaje,$encabezado);
echo "<script>alert('mensajes enviados correctamente')</script>";

?>