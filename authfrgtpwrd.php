
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
	
	try{
	   if($_POST['em'] == ''){
	   	throw new Exception("email cnnt empty");	
	   }
	   
	   if(!filter_var($_POST['em'], FILTER_VALIDATE_EMAIL)){//verify email
	   	throw new Exception("email invalid");
	   }
	   
	   $f = $be->prepare("SELECT * FROM users WHERE email=? AND  status=?");
	   $f->execute([$_POST['em'], 1]);
	   $tl = $f->rowCount();
	   if(!$tl) {
	      throw new Exception("email is nt found in/frm db");
	   }
	   
	   //token for ech user time on pg, for security, generate specific token fr ech users
	   $token = time();
	   
	   //new token will be generatd cus, frgt pwrd  rqst is sucs
	   $up = $be->prepare("UPDATE users SET token=? WHERE email=?");
	   $up->execute([$token, $_POST['em']]);
	   
	   //here, email sent to user email to rst password
		
		$fprstlink = BASE_URL. 'authrstpwrd.php?em='.$_POST['em'].'&token='.$token;
		$fprst = 'please click to rst pwrd: <br>';
		$fprst .= '<a href="'.$fprstlink.'">';
		$fprst .= 'click here to rdrct';
		$fprst .= '</a>';
	   	   

	   //email sending start/continues here, top part is alrdy in auuthheadr.php
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
      $mail->Subject = 'Reset password email';
      $mail->Body    = $fprst;
      // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      
      $sms ='please chck yo email and follow steps';
         
     }

      catch(Exception $e) {
	      echo "msg cld nt be sent, mailer error {$mail->ErrorInfo}";
     }
	   
	   
	}
	
	catch(Exception $e){
		$rem = $e->getMessage();
	}
	
	
}

?>



<h2 class="mb_10">Forget Password</h2>

<?php
if(isset($rem)){
	echo '<div class= "re">';
	echo $rem;
	echo '</div>';
}

if(isset($sms)){
	echo '<div class="sucs">';
	echo $sms;
	echo '</div>';
}


?>


<form action="" method="post">
<table class="t2">

<tr>
<td>Email</td>
<td> <input type="text" name="em" autocomplete="off"></td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" value="Submit" name="frmi">
<a href="authlgn.php" class="primary_color">Back to login Page</a>
</td>
</tr>

</table>
</form>


<?php 
include_once("authfootr.php"); 
?>








