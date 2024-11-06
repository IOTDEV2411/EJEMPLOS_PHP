<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require 'vendor/autoload.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                                      //Enable verbose debug output
    $mail->isSMTP();                                                           //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                                      //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                                  //Enable SMTP authentication
    $mail->Username   = 'tu correo en gmail';                                  //SMTP username
    $mail->Password   = 'tu contraseña de aplicacion de tu cuenta de google';  //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('simeonvega24@gmail.com', 'PDSD-531');
    $mail->addAddress('svegac@senati.pe', '');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('courseBanner.png');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mensaje de Prueba - PHPMailer';

    //
    $file = fopen('Body_Mail.html','r');
    $str = fread($file, filesize('Body_Mail.html'));
    $str = trim($str);
    fclose($file);
    //

    $mail->Body = $str;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
    $mail->send();
    echo 'Se envio el correo de forma satisfactoria';
} catch (Exception $e) {
    echo "Error durante el envio del correo, codigo de error: {$mail->ErrorInfo}";
}
