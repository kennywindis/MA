<?php

//to cnct 2 mthds used
//mysqli extension , wrks only with mysql, oop and procedurl api
//PDO(php data object), wrks wid 12 diff db systems, oop

//mysqli extension mthd

$srvr= 'localhost';
$un= 'root';
$pw='';
$dbn='ksql';

//create cnctn 
$cn = new mysqli($srvr, $un, $pw, $dbn);

//chck cnctn
if($cn->connect_error){
	die("cnctn failed". $cn->connect_error);
}

echo "cnct succs";

//$cn->close();

//PDO mthd

$sn="localhost";
$ur="root";
$pd="";
$dbname="ksql";

try{
   //crt connctn
   $cnn= new PDO ("mysql:host=$sn;dbname=$dbname", $ur,  $pd);
   
   //set error mode to exception
   $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "cntd";
}

catch(PDOException $e) {
	echo "cntn failed " . $e->getMessage();
}

//$cnn=null;