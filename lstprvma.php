<?php

ob_start();
session_start();

//least privillage protectn used fr protect from attack in php code
//only user/process is allowed minimum amt of access necessary  to perform its intended functions

if(isset($_POST['frmy'])) {
	
	if($_POST['un'] == 'admin' && $_POST['pd'] == '2432') {
		$_SESSION['urtype'] = 'Admin';
		header("location:lpdashbrd.php");
	}
	elseif($_POST['un'] == 'qa' && $_POST['pd'] == '2442'){
		$_SESSION['urtype'] = 'QA';
		header("location:lpdashbrd.php");
	}
	else{
	  echo "login error";
	}
	
	
}



?>

<html>

<body>

<form action="" method = "post">

<table>

<tr>
<td>urname:</td>
<td><input type="text" name="un" autocomplete="off"></td>
</tr>

<tr>
<td>passwrd:</td>
<td><input type="text" name="pd" autocomplete="off"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="login" name="frmy"></td>
</tr>


</table>


</form>
