<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Variables de correo.
$from = "simeonvega24@gmail.com";
$to = "svegac@senati.pe";
$subject = "ENVIO DE CORREOS CON XAMPP";
$message = "BIENVENIDOS A NUESTRA CLASE DE DESARROLLO DE APLICACIONES WEB... ENVIANDO CORREOS CON XAMPP";
$headers = "From: " . $from;

// Envía el correo electrónico y verifica si fue exitoso.
if (mail($to, $subject, $message, $headers)) {
    echo "El correo electrónico fue enviado con éxito...";
} else {
    echo "No se pudo enviar el correo electrónico...";
}
?>

