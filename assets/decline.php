<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'dexfornillos3@gmail.com';                 // SMTP username
$mail->Password = 'linapo123';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('dexfornillos3@gmail.com', 'Dexxy');
$mail->addAddress('jekjekfornillos@gmail.com', 'Dex Fornillos');     // Add a recipient


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Sorry!';
$mail->Body    = 'Your schedule request has been declined! Maybe: reasons.';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	
} else {
    echo 'Message has been sent';
	$newURL = base_url('admin');
	header('Location: '.$newURL);
}