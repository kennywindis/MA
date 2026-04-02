<?php

ob_start();
session_start();

if(!isset($_SESSION['urtype'])){
	header("location:lstprvma.php");
	exit;
}

else{//here, least privellege code/part that  blocks/restrict any1 widut access to that pg nt to, protect tha pg too
  if($_SESSION['urtype'] == 'QA'){
  header("location:lstprvma.php");
	exit;
  	echo "kick em out";
  }	
}
echo"<h2>user list pg</h2>";
?>