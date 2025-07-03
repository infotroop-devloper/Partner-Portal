<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtppro.zoho.in';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'noreply@infotroop.co.in';                 // SMTP username
$mail->Password = 'ITISPLnr@2024';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'noreply@infotroop.co.in';
$mail->FromName = 'Mailer';
$mail->addAddress('yashcrm101@gmail.com', 'Yash');     // Add a recipient

/*$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

$mail->WordWrap = 50;                                 
/*$mail->addAttachment('/var/tmp/file.tar.gz');         
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  */  
$mail->isHTML(true);                                  
$htmlContent = file_get_contents("./templates/welcome-message.php"); // Ensure the path is correct

$htmlContent = str_replace(
    ['{{first_name}}', '{{username}}','{{password}}'],
    ['Yash', 'yash.karwa@infotroop.co.in','123456'],
    $htmlContent
);
$mail->Subject = 'Here is the subject';
$mail->Body    = $htmlContent;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}