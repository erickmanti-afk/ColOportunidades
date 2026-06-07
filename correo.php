<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/PHPMailer/Exception.php';
require '/PHPMailer/PHPMailer.php';
require '/PHPMailer/SMTP.php';

$destinatario = 'erickmanti@gmail.com';

$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$correo = $_POST['correo'];

$header = "Enviado desde la plataforma de Col Oportunidades";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

@mail($destinatario, $asunto, $mensajeCompleto, $header);

echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='contacto.html'\")</script>";
?>