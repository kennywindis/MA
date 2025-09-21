<?php

//order by clause

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


$slt = $con->prepare("SELECT * FROM students ORDER BY  id DESC");//order by clause can be ascending(ASC) or descending(DESC)
$slt->execute();
$re= $slt->fetchAll(PDO::FETCH_ASSOC);

echo '<table>';
echo '<tr><th>Id</th><th>First name</th><th>Last name</th><th>email</th><th>phone</th></tr>';

foreach($re as $rw){
	echo'<tr>';
	echo'<td>'.$rw['id'].'</td>';
	echo'<td>'.$rw['firstname'].'</td>';
	echo'<td>'.$rw['lastname'].'</td>';
	echo'<td>'.$rw['email'].'</td>';
	echo'<td>'.$rw['phone'].'</td>';
	echo'</tr>';
}


//close connection
//$cnn=null;




