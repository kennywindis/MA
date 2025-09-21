<?php

$sn="localhost";
$ur="root";
$pd="";
$dbname="ma1";

try{
   $cnn= new PDO ("mysql:host=$sn;dbname=$dbname", $ur,  $pd);//crt connction
   
   //set error mode to exception
   $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "cntd";
   
   //insrt into tble
   $i= "INSERT INTO students (firstname, lastname, email, phone) VALUES('mi', 'mind', 'foreal@yomail.com', '082')";
   $cnn->exec($i);//to avoid repetion of 1 same data in table do nt run/load more than once, exec() is inbuilt pdo mtd can be used fr insert query and someothr queries nt select query
   //echo "insrtd"; 
   $l= $cnn->lastInsertId();//to get/post last data  inserted 
   echo $l;
   
   //to insrt multiple data
   //$cnn->beginTransaction();
   //$cnn->exec("INSERT INTO students (firstname, lastname, email, phone) VALUES('mv', 'cool', 'yo@yomail.com', '024')");
   //$cnn->exec("INSERT INTO students (firstname, lastname, email, phone) VALUES('be', 'freal', 'jst@yomail.com', '042')");
   //$cnn->exec("INSERT INTO students (firstname, lastname, email, phone) VALUES('free', 'sef', 'free@yomail.com', '012')");
   //$cnn->commit();
}

catch(PDOException $e) {
	echo "cntn failed " . $e->getMessage();
}

//close connection
//$cnn=null;