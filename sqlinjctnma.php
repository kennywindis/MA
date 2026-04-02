<?php

//sql injection occur when attacker insert mallicious int sql stmnt 2ru input field on web page to gain access to db
//mthds to protect against such are  3types

//addslashes() mthd
//email validation mthd, used when email is used instaed of usrname
//prepared stmnt mthd, whch is mst recomended mthd

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

if(isset($_POST['frmd'])) {
	$un= $_POST['un'];
	$pwrd= $_POST['pd'];
	
	$stmnt = $po->prepare("SELECT * FROM admin WHERE un =? AND pd =?");
	$stmnt->execute([$un, $pwrd]);
	$t = $stmnt->rowCount();
	
	if($t > 0){
		echo 'success yo logged  in';
	}
	else {
		echo "error";
	}
}

?>

<form action="" method = "post">

<div>
<input type="text" name="un" placeholder="usrname" autocomplete="off">
</div>

<div>
<input type="text" name="pd" placeholder="passwrd" autocomplete="off">
</div>

<button type="submit"  name="frmd">Login</button>

</form>