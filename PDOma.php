<?php

//PDO has 2 mthds
//named param, simple but long
//unamed param simple and short

$sn="localhost";
$ur="root";
$pd="";
$dbname="ma1";

try{
$cnn= new PDO ("mysql:host=$sn;dbname=$dbname", $ur,  $pd);//crt connction
   
//set error mode to exception
$cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "cntd";
   
   //named parameter mthd
   //$stmnt = $cnn->prepare("INSERT INTO students (firstname, lastname, email, phone) VALUES(:firstname, :lastname, :email, :phone)");//the colon in front of values means placeholder value= so tghat any value can be insrtd
   //$stmnt->bindParam(':firstname', $fn);
   //$stmnt->bindParam(':lastname', $ln);
   //$stmnt->bindParam(':email', $em);
   //$stmnt->bindParam(':phone', $p);
   //$fn = 'ken';
   //$ln = 'dami';
   //$em = 'becool@me.com';
   //$p = '2442';
   //$stmnt->execute();
   
   
   //unnamed parameter mthd
   $st = $cnn->prepare("INSERT INTO students (firstname, lastname, email, phone) VALUES(?,?,?,?)");//the question mark is also placeholder to enable inrstn diffs values
   $st->execute(['p', 'k', 'sunday@me.com', '0311']);
   
   
}

catch(PDOException $e) {
	echo "cntn failed " . $e->getMessage();
}

//close connection
//$cnn=null;