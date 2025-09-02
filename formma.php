<?php

//there are 5examples of form post get request here

?>

<html>

<head>

<title>

</title>

</head>

<body>

<?php

//this is if yo dnt wnt to redirect the form action/output to another page, yu jst want it to output on same page 
//if you want output on another page jst add page link in the form action, and in  other page add jst this //echo $_REQUEST["name"];
                                                                                                           //echo $_REQUEST["email"];
                                                                                                           //echo $_REQUEST["password"];

//if (isset($_REQUEST['frm'])){
	//echo $_REQUEST["name"];
	//echo $_REQUEST["email"];
   //echo $_REQUEST["password"];
//}


//this is to pass msg from main/nother page dt is redirecting to this page

//if(isset($_REQUEST['msg'])){
//echo $_REQUEST['msg'];//this  output  value of msg frm main/nother page on redirected page

	//if($_REQUEST['msg']== "sucs"){
		//echo 'sucs';
	//}
	
	//else {
		//echo "error";
	//}
	
	
//}

?>


<!--<form action="form2ma.php" method="post">

<div>Name:</div>
<div>
<input type="text" name="name" autocomplete="off">
</div>

<div>Email:</div>
<div>
<input type="text" name="email" autocomplete="off">
</div>

<div>Password:</div>
<div>
<input type="text" name="password" autocomplete="off">
</div>


<div>
<input type="submit"  value="submit" name ="frm">
</div>

</form>-->


<!-- this is also for redirecting but using link nt form to gt ouput, jst this and echo $_REQUEST['name, age']; in other page redirecting the lunk to -->

<!--<a href="frm3ma.php?name=ken&age=30">mv to frm3ma page</a>-->


<?php

//this is another example fr using form , request 

//if (isset($_REQUEST['frm'])){
	//$s = $_REQUEST['n1'] + $_REQUEST['n2'] + $_REQUEST['n3'];
	//echo $s;
//}


?>

<!--<form action="" method="post">

<div>Enter number 1:</div>
<div>
<input type="text" name="n1" autocomplete="off">
</div>

<div>Enter number 2:</div>
<div>
<input type="text" name="n2" autocomplete="off">
</div>

<div>Enter number 3:</div>
<div>
<input type="text" name="n3" autocomplete="off">
</div>


<div>
<input type="submit"  value="submit" name ="frm">
</div>

</form> -->


<?php

//this is another example of using form, request

if (isset($_REQUEST['frm'])){
	
	for ($i=1;$i<=$_REQUEST['numb'];$i++) {
		
		for($j=1;$j<=$i;$j++){
			echo $j . '';
		}
		
		echo '<br>';
	}
}


?>

<form action="" method="post">

<div>Enter line number :</div>

<div>
<input type="text" name="numb" autocomplete="off">
</div>

<div>
<input type="submit"  value="submit" name ="frm">
</div>

</form>











</body>




