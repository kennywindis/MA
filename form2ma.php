<?php

//super global methods to use for form get, post, request
//request can be used in-place of/for both cases

//GET
//echo $_GET["name"];
//echo $_GET["email"];
//echo $_GET["password"];

//POST
//echo $_POST["name"];
//echo $_POST["email"];
//echo $_POST["password"];

//REQUEST
//echo $_REQUEST["name"];
//echo $_REQUEST["email"];
//echo $_REQUEST["password"];

//header (location)
//used to redirect to another page 

//wid the ?msg you can tk msg to the other redirected  page 

if ($_REQUEST['name'] == 'ken'){
	
header("location:formma.php?msg=sucs"); 

}

else{

header("location:formma.php?msg=error"); 

}













