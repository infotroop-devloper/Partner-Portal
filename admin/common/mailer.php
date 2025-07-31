<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
include_once('../common/ssloger.php');
include_once('../config/app_config.php');

function mailTo($data) {
    $mlog = new ssloger();
    
    try {
        $mail = new PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host = $data['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $data['username'];
        $mail->Password = $data['password'];
        $mail->SMTPSecure = $data['encryption']; // Should be 'tls' or 'ssl'
        $mail->Port = $data['smtp_port'];
        
        // Enable verbose debug output (remove in production)
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = function($str, $level) use ($mlog) {
            $mlog->lwrite("SMTP Debug Level $level: $str");
        };

        // Recipients
        $mail->setFrom($data['username'], 'Infotroop Team');
        $mail->addAddress($data['recepitant']);
        $mail->addReplyTo($data['username'], 'Infotroop Team');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $data['Subject'];
        
        // Check if template file exists
        if (!file_exists($data['template'])) {
            $mlog->lwrite("Template file not found: " . $data['template']);
            return "Template file not found: " . $data['template'];
        }
        
        $htmlContent = file_get_contents($data['template']);
        
        if ($htmlContent === false) {
            $mlog->lwrite("Failed to read template file: " . $data['template']);
            return "Failed to read template file";
        }
        
        // Replace placeholders
        $htmlContent = str_replace(
            $data['mapping_string'],
            $data['mapping_data'],
            $htmlContent
        );
        
        $mail->Body = $htmlContent;
        
        // Alternative plain text body
        $mail->AltBody = strip_tags($htmlContent);

        // Send email
        $result = $mail->send();
        
        if ($result) {
            $mlog->lwrite("Email sent successfully to: " . $data['recepitant']);
            return true;
        } else {
            $mlog->lwrite("Email send failed - no exception thrown");
            return "Email send failed";
        }
        
    } catch (Exception $e) {
        $errorMsg = "Mailer Error: " . $e->getMessage();
        $mlog->lwrite($errorMsg);
        return $errorMsg;
    }
}