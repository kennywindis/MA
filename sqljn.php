<?php

//join, to combine rows from two or more tables, related column btwn them
//3 types of join, inner(same as normal join), left join, right join,


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

//
$slt = $con->prepare("SELECT * FROM students s JOIN cities c ON s.city_id = c.city_id JOIN countrys cy ON s.country_id = cy.country_id ");//s  rep short frm of students table , c rep shrt frm of cities table, cy rep shrt frm of countrys table
$slt->execute();
$re= $slt->fetchAll(PDO::FETCH_ASSOC);



//nested loop mthd(nt rlly inuse )
/*$slt = $con->prepare("SELECT * FROM cities WHERE city_name=? ");
$slt->execute(['kcity']);
$re= $slt->fetchAll(PDO::FETCH_ASSOC);
foreach($re as $rw) {
	
	$j =$con->prepare("SELECT firstname FROM students WHERE city_id=?");
	$j->execute([$rw['city_id']]);
	$re1= $j->fetchAll(PDO::FETCH_ASSOC);
	foreach($re1 as $rw1) {
		echo $rw1['firstname'] . '<br>';
	}
}*/


//echo '<table>';
//echo '<tr><th>Id</th><th>First name</th><th>Last name</th><th>email</th><th>phone</th></tr>';

/*foreach($re as $rw){
	echo'<tr>';
	echo'<td>'.$rw['id'].'</td>';
	echo'<td>'.$rw['firstname'].'</td>';
	echo'<td>'.$rw['lastname'].'</td>';
	echo'<td>'.$rw['email'].'</td>';
	echo'<td>'.$rw['phone'].'</td>';
	echo'</tr>';
}*/

echo "<pre>";
print_r($re);
echo "</pre>";


//close connection
//$cnn=null;




