<?php

$dh='localhost';
$dbn='ma1';
$dbu='root';
$dbp='';

try{
   $po = new PDO("mysql:host=$dh;dbname=$dbn", $dbu, $dbp);
   $po->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   
catch(PDOException $e){//$e also mean $execption(it is a constant variable)
	echo "cnctn error". $e->getMessage();
}

$id =$_GET['id'];


//this here , is usn  pdo stmnt methd(best mthd) to prevent wrng access to db

$si="SELECT * FROM post WHERE id=? LIMIT 1";
echo $si;

$stmnt = $po->prepare($si);
$stmnt->execute([$id]);
$ret = $stmnt->fetchAll(PDO::FETCH_ASSOC);


echo"<pre>";//jst echo
print_r($ret);
echo"<pre>";











