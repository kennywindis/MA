<?php
ob_start();
session_start();

if(!isset($_SESSION['urtype'])){
	header("location:lstprvma.php");
	exit;
}


echo"<h1>welcome to dash board</h1>";

echo"<p>logged in as"  .$_SESSION['urtype']. "</p>";


//here, gvn rght access and avoiding wrng access

//the Admin will/can have access to both usrlists and posts pg
if($_SESSION['urtype']=='Admin'){
	
	echo'<a href="lppost.php">Posts</a>';
	echo'<a href="lpusrlist.php">Usr</a>';
}

//the QA will/can only hv access to posts pg
if($_SESSION['urtype']=='QA'){
	
	echo'<a href="lppost.php">Posts</a>';
	
}

echo'<a href="lplgut.php">log fuck out</a>';






