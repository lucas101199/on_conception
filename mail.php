<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
        
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('binb.2978@gmail.com');
        $mail->addAddress('lucas_fernandez@orange.fr');
        
        $mail->Subject = 'Contact form: ';
        $mail->Body = "Contact form submission\n\n";
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $msg .= "Message sent!";
        }
?>