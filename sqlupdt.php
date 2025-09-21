<?php

//update

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


$slt = $con->prepare("UPDATE students SET firstname=?, lastname=?, email=?, phone=? WHERE id=?");
$slt->execute(['genvy','socool','cldbe@me.com', '2712', 5]);

 


//close connection
//$cnn=null;




