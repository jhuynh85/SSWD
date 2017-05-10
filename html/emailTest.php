<?php
require 'stdlib.php';
require 'PHPMailerAutoload.php';

echo 'Creating mailer';
$mail = new PHPMailer;
echo 'Mailer created';
$mail->setFrom('admin@vfteam.com', 'Joseph Huynh');
$mail->addAddress('joe.huynh@gmail.com', 'Joseph Huynh');
$mail->Subject = 'First PHPMailer Message';
$mail->Body = 'Hi! This is my first e-mail sent through PHPMailer.';

if (!$mail->send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}
?>