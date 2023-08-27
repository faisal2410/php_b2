<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
	
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = '88481333b65a6b';
    $mail->Password = 'e355f1d8f0b1db';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;

    $mail->setFrom('contact@example.com');
    $mail->addAddress('arefindev@gmail.com');
    $mail->addReplyTo('contact@example.com');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
    
    $mail->addAttachment('uploads/plane.jpg', 'new_plane.jpg');

    $mail->isHTML(true);
    $mail->Subject = 'TEST SUBJECT';
    $mail->Body = 'TEST BODY FOR EMAIL';

    $mail->send();

	echo 'Message has been sent';
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

