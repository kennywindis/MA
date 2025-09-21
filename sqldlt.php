<?php

$sn="localhost";
$ur="root";
$pd="";
$dbname="ma1";

try{
   $con = new PDO ("mysql:host=$sn;dbname=$dbname", $ur,  $pd);//crt connction
   
   //set error mode to exception
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "cntd";
   
   
}

catch(PDOException $e) {
	echo "cntn failed " . $e->getMessage();
}


$slt = $con->prepare("DELETE FROM students WHERE email=?");
$slt->execute(['any email in the table']);

//DELETE * FROM students, to delete all the tbale content
//DROP table students, to delete the table itself 


//close connection
//$cnn=null;




