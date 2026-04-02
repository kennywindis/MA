<?php

//authentication system

$dbh="localhost";
$dbn="ma1";
$dbu="root";
$dbpss="";

try{
   $be = new PDO ("mysql:host=$dbh;dbname=$dbn", $dbu, $dbpss);
   $be->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){//$e mean also exception
	echo "cnnct error :" . $e->getMessage();
}


define('BASE_URL', 'http://localhost/MA/'); //more like foundation url of whole proj 