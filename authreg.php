<?php
include_once("authheadr.php");
?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

?>


<?php

if(isset($_POST['frmi'])){
	try {
		if($_POST['fn']==''){
			throw new Exception("First name cannt be empty");
		}
		
		if($_POST['ln']==''){
			throw new Exception("Lastname cannt be empty");
		}
		
		if($_POST['em']==''){
			throw new Exception("email cannt be empty");
		}
		
		if(!filter_var($_POST['em'],FILTER_VALIDATE_EMAIL)){
			throw new Exception("email is invalid");
		}
		
		
		//for prsns trying to use same email already used
		
		$stmnt = $be->prepare("SELECT * FROM users WHERE email=?");
		$stmnt->execute([$_REQUEST['em']]);
		$t = $stmnt->rowCount();
		if($t){
			throw new Exception("email ardy exist");
		}
		
		
		if($_POST['phn']==''){
			throw new Exception("phone cannt be empty");
		}
		
		if($_POST['pd']=='' || $_POST['rpd']==''){
			throw new Exception("passwrd cannt be empty");
		}
		
		if($_POST['pd']  !=  $_POST['rpd']){
			throw new Exception("passwrd must match");
		}
		
		//hashing pwrd, to prtct it
		
		$pd = password_hash($_POST['pd'], PASSWORD_DEFAULT);
		$token =time();//for security also same rzn fr hashing passwrd
		
		//input/insert values for all inputs
		
		$stmnt = $be->prepare("INSERT INTO users (firstname, lastname, email, phone, password, token, status) value(?,?,?,?,?,?,?)");
		$stmnt->execute([$_POST['fn'], $_POST['ln'], $_POST['em'], $_POST['phn'], $pd, $token, 0 ]);
		
		//here, email sent to user email to verify registration
		
		$emvrlink = BASE_URL. 'authregvrfy.php?em='.$_POST['em'].'&token='.$token;
		$emvr = 'please click to verify registration: <br>';
		$emvr .= '<a href="'.$emvrlink.'">';
		$emvr .= 'click here to rdrct';
		$emvr .= '</a>';
		
		//here, is a general frmt(code) fr sending email
		
		require 'vendor/autoload.php';
		$mail = new PHPMailer(true);
		
		try{
      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Host = 'smtp.mailtrap.io';
      $mail->SMTPAuth = true;
      $mail->Username = '4a0b883b77c1a4';
      $mail->Password = 'bc38851509f85e';
		$mail->SMTPSecure = 'tls'; 
		$mail->Port = 2525;
		
		//Recipients
      $mail->setFrom('grandma@cool.com');
      $mail->addAddress($_POST['em']);     //Add a recipient             
      $mail->addReplyTo('grandma@cool.com');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');//smaple pattern      //Add attachments
      //$mail->addAttachment('fuma/okc team.jpg', 'new okc team.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                                //Set email format to HTML
      $mail->Subject = 'Registration verification email';
      $mail->Body    = $emvr;
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      
      //success msg for complete reg
	   
		$smsg ="registration complete, verification sent to your email, click to verify registration";
   
     }

      catch(Exception $e) {
	      echo "msg cld nt be sent, mailer error {$mail->ErrorInfo}";
     }
		
		
	}
	
	catch(Exception $e){
		$emsg = $e->getMessage();
	}
}


?>

<h2 class="mb_10">Registration</h2>

<?php

if(isset($emsg)) {//error msg
	echo '<div class= "er">';
	echo $emsg;
	echo '</div>';
}

if(isset($smsg)) {//success msg
	echo '<div class= "sucs">';
	echo $smsg;
	echo '</div>';
}


?>

<form action="" method="post">

<table class="t2">

<tr>
<td>First Name:</td>
<td><input type="text" name="fn" autocomplete="off" value="<?php if(isset($_POST['fn'])) {echo $_POST['fn'];}?>" ></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" name="ln" autocomplete="off" value="<?php if(isset($_POST['ln'])) {echo $_POST['ln'];}?>" ></td>
</tr>

<tr>
<td>Email:</td>
<td><input type="text" name="em" autocomplete="off" value="<?php if(isset($_POST['em'])) {echo $_POST['em'];}?>" ></td>
</tr>

<tr>
<td>Phone:</td>
<td><input type="text" name="phn" autocomplete="off" value="<?php if(isset($_POST['phn'])) {echo $_POST['phn'];}?>" ></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="text" name="pd" autocomplete="off"></td>
</tr>

<tr>
<td>Retype Password:</td>
<td><input type="text" name="rpd" autocomplete="off"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Submit" name="frmi"></td>
</tr>


</table>
</form>

<?php 
include_once("authfootr.php"); 
?>


















