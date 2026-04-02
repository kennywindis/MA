<?php

//step 1

$dh="localhost";
$dbn="ma1";
$dbu="root";
$dbp="";

try{
  $cnt = new PDO("mysql:host=$dh;dbname=$dbn", $dbu, $dbp);
  $cnt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

catch(PDOExeception $e){
	echo "cnctn error:". $e->getMessage();
}


?>

<html>

<style>

a.link{
width:40px;
height:40px;
text-align:center;
line-height:40px;
display:inline-block;
text-decoration:none;
background:darkslategray;
color:#000;
font-size:20px;
margin:0 5px 20px 0;/*means margin:top right bottom left*/
}

</style>

<body>

<div style ="width:400px;margin:20px auto;">
<h2>Student List</h2>

<?php

//this is ah main code  of pgng, pgn setup

$pg = 3;
$p =$cnt->prepare("SELECT * FROM students");
$p->execute();
$t=$p->rowCount();

$tpg=ceil($t/$pg);


//here, to fix/shw  rqrd sequence numb of content to be on each pg
  
if(!isset($_REQUEST['p'])){
	$strt = 1;
}
else{
  $strt = $pg *($_REQUEST['p']-1) +1;
}


$y=0;
$yo=0;

$arr=[];

$re = $p->fetchAll();
foreach($re as $rwl){
	$y++;
	if($y>=$strt){
	   $yo++;
	   if($yo>$pg) {
	      break; 	
	   }
		$arr[] = $rwl['id'];
	}
	
}

?>

<?php

//initiate content of pgng pg

$st= $cnt->prepare("SELECT * FROM students");
$st->execute();
$res= $st->fetchAll(PDO::FETCH_ASSOC);
foreach($res as $rws) {

if(!in_array($rws['id'],$arr)){//here, used to dvd/fix rqrd amt of content in each pgs
	continue;
}

   echo '<div style ="padding:30px;margin-bottom:10px;background:darkslategrey;">';
	echo 'Name: '.$rws['firstname'].''.$rws['lastname']. "<br>";
	echo 'Email: '.$rws['email'];
	echo '</div>';
}

//previous button
if(isset($_REQUEST['p'])){
	if($_REQUEST['p'] ==1){
		echo '<a class="links" href="javascript:void;" style="background:#ddd;"> << </a>';
	}
	else{
	  echo'<a class="link" href="http://localhost/MA/Pgng.php?p='.($_REQUEST['p']-1).'"> << </a href>';
	}
}
else{
echo '<a class="links" href="javascript:void;" style="background:#ddd;"> << </a>';

}


//pg numbrs
for($i=1;$i<=$tpg;$i++){//
	echo '<a class = "link" href="http://localhost/MA/Pgng.php?p='.$i.'">'.$i.'</a href>';
}


//nxt button
if(isset($_REQUEST['p'])){
	if($_REQUEST['p'] == $tpg){
		echo '<a class="links" href="javascript:void;" style="background:#ddd;"> >> </a>';
	}
	else{
	  echo'<a class="link" href="http://localhost/MA/Pgng.php?p='.($_REQUEST['p']+1).'"> >> </a href>';
	}
}
else{
echo '<a class="link" href="http://localhost/MA/Pgng.php?p=2"> >> </a href>';
}


?>


</div>


</body>





