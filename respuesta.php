<?php

include("Mailer/src/PHPMailer.php");
include("Mailer/src/SMTP.php");
include("Mailer/src/Exception.php");

try{
    
    $emailTo = $_POST["correo"];
    $subject = $_POST["asunto"];
    $bodyEmail = $_POST["mensaje"];
    
    
    
    $fromemail = "erickmanti@gmail.com";
    $fromname = "Col Oportunidades";
    $host = "smtp.gmail.com";
    $port = "587";
    $SMTPAuth = "login";
    $SMTPSecure = "tls";
    $password = "minniemichin2";
    
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $host;
    $mail->Port = $port;
    $mail->SMTPAuth = $SMTPAuth;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Username = $fromemail;
    $mail->Password = $password;
    
    $mail->setFrom($fromemail, $fromname);
    $mail->addAddress($emailTo);
    
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $bodyEmail;  
    
    if (!$mail->send()){
        echo "No se ha enviado el correo"; die();
    }
    
    echo "<script>alert('Correo enviado correctamente')</script>";
    echo "<script> setTimeout(\"location.href='servicioalclienteadmin.php'\")</script>";
} catch (Exception $e) {
    
}
require ("cnpqrsd.php");
$consulta = "INSERT INTO respuestas VALUES('','$emailTo','$subject','$bodyEmail')";
$resultado = mysqli_query($link, $consulta) or die("<h2>Error de envio</h2>");
?>