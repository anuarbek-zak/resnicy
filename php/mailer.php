<?php
date_default_timezone_set('Etc/UTC');
require_once('phpmailer/class.pop3.php');
require_once('phpmailer/class.phpmailer.php');
require_once('phpmailer/class.smtp.php');
require_once('phpmailer/PHPMailerAutoload.php');
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "bybruantkz@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "bybruantkzsdu";
//Set who the message is to be sent from
$mail->setFrom('bybruantkz@gmail.com');
//Set an alternative reply-to address
//$mail->addReplyTo('bybruantkz@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('lashesbruant@gmail.com', 'name');
//Set the subject line
$mail->Subject = 'Ресницы';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->MsgHTML("Пришел заказ на ресницы ".$_POST['currentResnicy']." от ".$_POST['name'].". Номер ".$_POST['phone']);
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>