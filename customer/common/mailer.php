<?php
require 'PHPMailerAutoload.php';
// require_once('class.smtp.php');
//  require_once('class.phpmailer.php');
require_once('configMail.php');
include_once('firebase.php');
include_once('push.php');
include_once('ssloger.php');

function mailTo($sendTo, $sendToName = "", $subject, $body, $AddressCC=NULL, $AddressBCC=NULL, $IsHtml=true, $attachment = "none") {
	$mlog = new ssloger();
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPOptions = array(
			'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
			)
	);
	$mail->Host = MHOST;
	//$mail->SMTPAuth = true;
	$mail->Username = MUSERNAME;
	$mail->Password = MPASSWORD;
	$mail->SMTPSecure = SMTPSECURE;
	$mail->Port = PORT;
	$mail->SMTPDebug = 0;
	$mail->setFrom(FROM, FROM_NAME);
	$mail->addReplyTo(REPLYTO, FROM_NAME);

    // This will check if the emails are to be sent to actual addresses or to redirected address
    if(ADDRESS_TO_ALWAYS == ""){
			$to_adr = $sendTo;
			$toEmails = explode(",", $sendTo);
			$toNames = explode(",", $sendToName);
			$cnt = 0;
			$countNames = count($toNames);
			foreach ($toEmails as $toEmail) {
					if ($countNames < ($cnt + 1)) {
							$toName = "";
					} else {
							$toName = $toNames[$cnt];
					}
					$mail->addAddress($toEmail, $toName);
					$cnt = $cnt + 1;
			}
    	$mail->addCC(CC);
    } else{
        $mail->addAddress(ADDRESS_TO_ALWAYS, "Redirected email");
				$to_adr = ADDRESS_TO_ALWAYS . " in place of ". $sendTo;
    }
	$mail->addBCC(BCC);
	$mail->ContentType = 'text/plain';
	$mail->isHTML($IsHtml);		  // Set email format to HTML
    //
    // append MAIL_ENV to subject
	$mail->Subject = $subject . MAIL_ENV;
	$mail->Body = $body . (ADDRESS_TO_ALWAYS == "" ? "" : "<br><br>Not sent to: $sendTo");
	if ($attachment <> "none") {
        $attachFiles = explode(",", $attachment);
        foreach ($attachFiles as $attachFile) {
                $mail->AddAttachment($attachFile);
        }
	}
	if (!$mail->send()) {
			$mlog->lwrite(" ******* Mailer Failed *******");
			$mlog->lwrite($mail->ErrorInfo);
			return $mail->ErrorInfo; // send failed returning error details 
	} else {
			$mlog->lwrite("Email sent to:" . $to_adr);
			return true;  // send successful
	}
}

