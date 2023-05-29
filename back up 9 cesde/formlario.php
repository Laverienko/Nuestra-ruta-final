<?php
$name = $_POST['nombre'];
$mail = $_POST['email'];
$phone = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . email . "\r\n";
$header .= "X-Mailer:PHP/" . phpversion() . "\r\n";
$header .= "Mime-version:1.0 \r\n";
$header -= "content-Type: text/plain"

$message = "Este mensaje fue enviado por: " .$name."\r\n";
$message .= "Su e-mail es: $mail"."r\n";
$message .="Teléfono de contacto: ".$phone ."\r\n";
$message .= "Mensaje: " . $_POST['mensaje']."\r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'xxxxxxxxxxxxxxx@hotmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>