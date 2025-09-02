<?php

ob_start();// activate the $_SESSIO[];
session_start();//activate the $_SESSION[];

if(isset($_POST['fv'])){
	//echo $_POST['nm'];
	//echo'<br>';
	//echo $_POST['em'];
	
	//one methd of validation
	/*$valid = 1;
	
	if($_POST['nm'] == ''){
	$valid = 0;
		echo  "name fi nt empty";
	}
	
	if($_POST['em'] == ''){
	$valid = 0;
		echo  "email fi nt empty";
	}
	else{
	
	   if(!filter_var($_POST['em'], FILTER_VALIDATE_EMAIL)){
	   $valid = 0;
	   	echo "email mst be valid<br>";
	   }
	}
	
	if($valid == 1) {
		echo "sucsul";
	}*/

   //another method of validation, best mthd strt frwd
   try{
      
   if($_POST['nm'] == ''){
	
	   throw new Exception ( "name fi nt empty");
	}
	
	if($_POST['em'] == ''){
	
		 throw new Exception("email fi nt empty");
	}
	
	if(!filter_var($_POST['em'], FILTER_VALIDATE_EMAIL)){
	   throw new Exception("email is invalid");
   }
   
   
   //$sm = "success";//same as wid $_SESSION[], only diff is that it help clear success prompt after refreshn page
   
   $_SESSION['sm'] = "success";//this is to mk sucs msg after inputn value clear using $_SESSION[];
   
   //unset($_POST['nm']);//help to unset/clear the effect of value" ", so that input value will clear after refresh/after showing success
   //unset($_POST['em']);
   
   header("location:fvma.php");
   
   exit;
   
  }
   
   catch(Exception $e) {
   	$emg = $e->getMessage();
   }
 
 
 
	
}

?>

<html>

<body>

<?php

//this is to shw suc msg and error msg in html form too

if(isset($sm)){//another way is php will be closed here so as to quick do insert html div wid style, then php  reopened after writing div but long mthd, jst use this echo style below, same as $_SESSION['sm] below only diff is $_SESSION is involved
	echo "<div style='color:blue;'>".$sm."</div>";
	
}

if(isset($_SESSION['sm'])){//same as above for $sm only that $_SESSION[] is involved to help remove the success msg/prompt after refreshn page
	echo "<div style='color:blue;'>".$_SESSION['sm']."</div>";
	unset($_SESSION['sm']);
	
}

if(isset($emg)){
	echo "<div style='color:orange;'>".$emg."</div>";
}

?>

<form action="" method = "post">

<table>

<tr>
<td>name:</td>
<td><input type="text" name="nm" autocomplete="off" value="<?php if(isset($_POST['nm'])){ echo $_POST['nm']; } ?>"></td><!-- the value ="" mks input value nt to vanish even after shwing error or success, it save stress of retype from scratch, instd jst edit-->
</tr>

<tr>
<td>email:</td>
<td><input type="text" name="em" value="<?php if(isset($_POST['em'])){ echo $_POST['em']; } ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="submit" name="fv"></td>
</tr>


</table>


</form>


</body>
