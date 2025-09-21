<?php

//alter , to add, delete, rename, modify, columns in an existing table


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


$slt = $con->prepare("ALTER TABLE students DROP COLUMN age");// when using ADD age int(6);, when using DROP/DELETE COLUMN age;, when using RENAME COLUMN age to ages;,when using MODIFY COLUMN age text;
$slt->execute();
//$re= $slt->fetchAll(PDO::FETCH_ASSOC);



//close connection
//$cnn=null;




