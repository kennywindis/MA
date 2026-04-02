<?php

//xss, cross site scripting attcks occurs when  user innput is nt sanitized well b4 being included in web pgs
//to prevent such, 3 mthds to use

//PDO stmnt mthd( rcmnd)

//sanitization(input), "filter_input()"  or "filter_var(....., FILTER_VALIDATE_EMAIL/URL/INT/STRING)" or "filter_var(....., FILTER_SANITIZE_EMAIL/URL/INT/STRING)" (rcmnd too)

//sanitization(output), usn "htmlspecialchars()" and/or "htmlentities()" ( rcmnd), both used to output data into HTML context


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

if(isset($_POST['frmm'])) {
	$un= $_POST['un'];//can use filter_var($_POST['un'], FILTER_SANITIZE_STRING) here to  also protect
	
	//updt pdo stmnt
	$stmntup = $po->prepare("UPDATE admin SET un=? WHERE id=?");
	$stmntup->execute([$un,1]);
	
	//slct pdo stmnt
	$stmntsl = $po->prepare("SELECT * FROM admin WHERE id=?");
	$stmntsl->execute([1]);
	
	
   $ret = $stmntsl->fetchAll(PDO::FETCH_ASSOC);
   
   foreach ($ret as $rd){
   	echo "current usr name:" .htmlspecialchars($rd['un']);//to prevent attcks
   }

}

?>

<form action="" method="post">
 <input type="text" name="un" autocomplete="off">
 <input type="submit" value="submit" name="frmm">
</form>










