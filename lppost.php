<?php

ob_start();
session_start();

if(!isset($_SESSION['urtype'])){
	header("location:lstprvma.php");
	exit;
}

echo"<h2>post pg</h2>";
?>