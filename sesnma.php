<?php

//for permanent storage use database nt session

//ob_start() necessary to call  it, help to send headers correctly
//session_start() to start session, comes first before html tags i php
//$_SESSION [] to set session variable
//print_r() shw all session variable values
//session_unset() remv all session variable
//session_destroy() destroy session

ob_start();
session_start();

//$_SESSION['country']= "dis country";
//$_SESSION['city']= 'funny states';

//session_unset();
//session_destroy();


//echo"<pre>";
//print_r($_SESSION);
//echo"<pre>";

if(isset($_POST['f'])){//to chk if sessn is set
	
	
try{//try, throw catch block used to shw error msg in php	
	if($_POST['uname']!='admin'){
	throw new exception("uname do nt arnd");}
	
	if($_POST['pwrd']!='2244'){
	throw new exception("pwrd do nt fk");}
	
	$_SESSION['uname']='admin';
	$_SESSION['pwrd']='2244';
	
	header('location:sesnwlcm.php');
		
	}
	
catch(Exception $e){
	echo $e->getMessage();
			
	}
	
	
}

?>

<html>

<body>

<form action="" method = "post">

<table>

<tr>
<td>uname:</td>
<td><input type="text" name="uname"></td>
</tr>

<tr>
<td>pwrd:</td>
<td><input type="password" name="pwrd"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="login" name="f"></td>
</tr>


</table>


</form>


</body>






