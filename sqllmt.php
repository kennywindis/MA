<?php

//limit clause

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


$slt = $con->prepare("SELECT * FROM students ORDER BY id DESC LIMIT 5 OFFSET 2");//OFFSET mean ommit 2 or any numb of row, and it cn be also written like this LIMIT 2, 5 in this case  2 mean OFFSET  and  5 means LIMIT
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




