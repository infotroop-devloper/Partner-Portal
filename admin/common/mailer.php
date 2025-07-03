<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
include_once('../common/ssloger.php');
include_once('../config/app_config.php');

function mailTo($data) {
    $mlog = new ssloger();
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $data['smtp_host'];  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $data['username'];                 // SMTP username
    $mail->Password = $data['password'];                           // SMTP password
    $mail->SMTPSecure = $data['encryption'];                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $data['smtp_port'];                                    // TCP port to connect to

    $mail->From = $data['username'];
    $mail->FromName = 'Mailer';
    $mail->addAddress($data['recepitant']);     // Add a recipient

    /*$mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');*/

    $mail->WordWrap = 50;                                 
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  */  
    $mail->isHTML(true);                                  
    $htmlContent = file_get_contents($data['template']); // Ensure the path is correct

    $htmlContent = str_replace(
        $data['mapping_string'],
        $data['mapping_data'],
        $htmlContent
    );
    $mail->Subject = $data['Subject'];
    $mail->Body    = $htmlContent;

    if (!$mail->send()) {
        $mlog->lwrite(" ******* Mailer Failed *******");
        $mlog->lwrite($mail->ErrorInfo);
        return $mail->ErrorInfo; // send failed returning error details 
    } else {
        $mlog->lwrite("Email sent to:" . $to_adr);
        return true;  // send successful
    }
}