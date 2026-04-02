<?php
include_once("authheadr.php");
?>

<?php

if(isset($_POST['frmi'])){
	
	try{
	   
	   if($_POST['em']== ''){
	   	throw new Exception ("email empty");
	   }
	   
	   if(!filter_var($_POST['em'], FILTER_VALIDATE_EMAIL)){
	   	throw new Exception ("email nt matched");
	   }
	    
	   if($_POST['pd'] == ''){
	   	throw new Exception("passwrd empty");
	   }
	   
	   $st = $be->prepare("SELECT * FROM users WHERE email=? AND status=?");
	   $st->execute([$_POST['em'],1]);//here, status 1 is to block any user who registration is nt verified frm access main pg, also status =1 means that there is ardy a vrfd usr
	   $t = $st->rowCount();//here, rowcount count/check db table row, if truly there is ardy data wid email(em) and vrfd status(1)
	   if(!$t){//here, if no(!) data wid email(em) and status(1) is found, then..
	   	throw new Exception("email nt found");
	   	
	   }
	   else{//here, if data wid email(em) and status(1) is found, then..
	 	   $res = $st->fetchAll(PDO::FETCH_ASSOC);
	 	   foreach($res as $rw){
	 	   	$pdd = $rw['password'];
	 	   	if(!password_verify($_POST['pd'], $pdd)){//here, 'password_verify' verify/compare/confirm input passord while logging in is asame as 'hashed password' stored in db while registering
	 	   	   throw new Exception('password not matched');
	 	   		
	 	   	}
	 	   	
	 	   }
	 	}   
	 	
	 	$_SESSION['nutzer'] = $rw;//here, you fit name  session variable anytin wch is wht i did, also session is time inwch a pzn(nutzer) is interactng on pg
	 	
	 	header('location:' .BASE_URL. 'authdshbrd.php');
	 	
	 	//echo "You ah fit login now";
  }
  
  catch(Exception $e){
	    $emg = $e->getMessage();
  }

}

?>

<h2 class="mb_10">Login</h2>

<?php
if(isset($emg)){
	echo '<div class= "re">';
	echo $emg;
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
<td>Password</td>
<td><input type="password" name="pd" autocomplete="off"></td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" value="Login" name="frmi">
<a href="<?php echo BASE_URL ?>authfrgtpwrd.php" class="primary_color">Forgot Password</a>
</td>
</tr

</table>
</form>


<?php 
include_once("authfootr.php"); 
?>




