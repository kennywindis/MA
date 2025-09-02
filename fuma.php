<?php

include "fu.php";

//unlink('fuma/1756344981.jpg');

if(isset($_POST['fl'])){
	$pth=$_FILES['mifile']['name'];
	$pthtmp=$_FILES['mifile']['tmp_name'];
	
	//echo $pth;
	//echo '<br>';
	//echo $pthtmp;
	
	//size of file, optional jst if nded smtimes
	$sz = $_FILES['mifile']['size']/1024/1024;
	
	//this wrks fr img files
	$dt = getimagesize($pthtmp);
	$wt = $dt[0];
	$ht = $dt[1];
	$nw = ceil($wt/2);
	$nh = ceil($ht/2);
	
	//echo "<pre>";
	//print_r($dt);
	//echo "</pre>";
	
	
	//somtimes need to change name of file, but still dont use it cuz nt d best option use the step below instd
	//$ar = explode('.', $pth);
	//$fn = "cool.".$ar[1];
	//echo $fn;nt really needed, jst to shw tht actual name of file to chng
	
	//to upload to a prticulr folder
	//if($ar[1] == "jpg" || $ar[1] == "jpeg" || $ar[1] == "png" || $ar[1] == "pdf"){
	  //move_uploaded_file($pthtmp, 'fuma/'. $fn);
	//}
	//else{
	  //echo 'invld frmt';
	//}
	
	//to gt extension of file, wrk bttr thn explode/ ar[] mthod
	$ext = pathinfo($pth, PATHINFO_EXTENSION);
	$fn =time() . "." . $ext;
	
	//this is best mthd instd of explode() mthd
	$fi = finfo_open(FILEINFO_MIME_TYPE);
	$mi = finfo_file($fi, $pthtmp);
	//echo $mi;
	if($mi== 'image/jpg' || $mi== 'image/jpeg' || $mi== 'image/png' || $mi== 'application/pdf'){
	  if($sz<=50){
	  copy($pthtmp, "fuma/". $fn );//help to copy/mv the file into  diff folder at same time
	  move_uploaded_file($pthtmp, 'fu/'. $fn );//help to  mv the file into  diff folder at same time
	  
	  
	  $fns= time()."-s.".$ext;//$fns jst a variable 
	  $dstn = 'fuma/' .$fns;
	  is($pthtmp, $dstn, $nw, $nh);//calling function from fu.php 
	  
	  }
	  else {
	  	echo 'invld file sz';
	  }
	}
	else{
	  echo 'invld frmt';
	}
	
	
	
	
	finfo_close($fi);
	
	
	
	
}





?>


<html>

<body>

<form action="" method = "post"  enctype="multipart/form-data">

<table>

<tr>
<td>select a file:</td>
<td><input type="file" name="mifile"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" value="submit" name="fl"></td>
</tr>


</table>


</form>


</body>






