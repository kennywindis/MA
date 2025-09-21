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
   
   //crt db 
   //$s = "create database ma1";
   //$cnn->exec($s);//run/load it once, if error occur jst drop/delete it from phpmyadmin then run/load it again
   //echo "db crtd";
   
   //crt tb
   $t = "create table students (
          id INT(6) UNSIGNED AUTO_INCREMENT primary key,
          firstname VARCHAR(30) not null,
          lastname  VARCHAR(30) not null,
          email VARCHAR(50),
          phone VARCHAR(50)
          )";
          
   $cnn->exec($t);//run/load it once to avoid error, if error occur jst drop/delete it from phpmyadmin then run/load it again
   echo 'table crtd';
}

catch(PDOException $e) {
	echo "cntn failed " . $e->getMessage();
}

//close connection
//$cnn=null;