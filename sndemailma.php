<?php

//sending email, use 3 mthds
//built-in mail() func
//using library:PHPMailer, swiftmailer, (recomended)
//using API:sendgrid, mailgun

//PHPmailer we use, most used generally
//https://github.com//PHPMailer/PHPMailer, to install the PHPMailer pckage for use an

//for safe email testing
//https://mailtrap.io
//flexibility to chck if any mail is going or not

//import PHPMailer classes into global namespace
//these must be at top of yo script nt inside function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try{
   
   //$mail->SMTPDebug = SMTP::DEBUG_SERVER;   //Enable verbose debug output
    $mail->isSMTP();                         //Send using SMTP
    $mail->Host       = 'smtp.mailtrap.io'; //Set the SMTP server to send through
    $mail->SMTPAuth   = true;              //Enable SMTP authentication
    $mail->Username   = '4a0b883b77c1a4'; //SMTP username
    $mail->Password   = 'bc38851509f85e';//SMTP password
    $mail->SMTPSecure = 'tls';  //Enable implicit TLS encryption
    $mail->Port       = 2525;  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('samestreetside@gmail.com', 'ken');     //Add a recipient             
    $mail->addReplyTo('from@example.com', 'Mailer');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('fuma/okc team.jpg', 'new okc team.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is funny';
    $mail->Body    = '<b> be bold </b>';
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   
    echo 'msg sent';
   }

catch(PDOException $e) {
	echo "msg cld nt be sent, mailer error {$mail->ErrorInfo}";
}





