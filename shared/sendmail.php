<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../php-mailer/src/Exception.php';
require '../php-mailer/src/PHPMailer.php';
require '../php-mailer/src/SMTP.php';

function sendmail($email, $subjet, $contenuMail, $altbody)
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 2;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'contact@safinazyilmaz.com';                     // SMTP username
        $mail->Password   = 'ChatPerdu0924*';                               // SMTP password
        $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        // Recipients
        $mail->setFrom("contact@safinazyilmaz.com" , 'Freelance Safinaz Yilmaz');
        $mail->addAddress($email);     // Add a recipient

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subjet ;

        $mail->Body = $contenuMail;

        $mail->AltBody = $altbody;
        $mail->send();
        echo  'Message has been sent';
        return "Successfully sent";
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
