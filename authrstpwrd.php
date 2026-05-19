
<?php
include_once("authheadr.php");
?>

<?php

//here, is to chck/validate if token and email inna db align together wid one stored in db, also fr security purpose
$rst = $be->prepare("SELECT * FROM users WHERE email=? AND token=?");
$rst->execute([$_REQUEST['em'], $_REQUEST['token']]);//here, $_REQUEST is acting as same $_GETto fetch info of email and token frm url
$tl = $rst->rowCount();//here, if db table row is counted/chckd and contains rqrd/reqstd data. then..
if(!$tl){//here means if after rw countng  and no value is found/validated/confirmed or maybe user trying to use  invalid data to access, so user will be rdrctd bk to base url
   header('location:' .BASE_URL. 'authindex.php' );
   exit;
}


?>

<?php

if(isset($_POST['frmi'])) {
	try {
		if($_POST['pd']=='' || $_POST['rpd']==''){
			throw new Exception("passwrd cannt be empty");
		}
		
		if($_POST['pd']  !=  $_POST['rpd']){
			throw new Exception("passwrd must match");
		}
		
		
		//hashing pwrd, to prtct it
		$pd = password_hash($_POST['pd'], PASSWORD_DEFAULT);
		
		
		//here, updatn new passwrd and token 
		$rstt = $be->prepare('UPDATE users SET token=?, password=? WHERE email=? AND token=?');
		$rstt->execute(['', $pd, $_REQUEST['em'], $_REQUEST['token']]);
		header('location:' .BASE_URL. 'authlgn.php');
		exit;
	}
	
	catch(Exception $e){
		$rem =  $e->getMessage();
	}
	
	
	
	
}


?>

<?php
if(isset($rem)){
	echo '<div class= "re">';
	echo $rem;
	echo '</div>';
}
?>


<form action="" method="post">
<table class="t2">

<tr>
<td>New Password</td>
<td> <input type="password" name="pd" autocomplete="off"></td>
</tr>

<tr>
<td>Re-type Password</td>
<td> <input type="password" name="rpd" autocomplete="off"></td>
</tr>


<tr>
<td></td>
<td>
<input type="submit" value="Submit" name="frmi">
</td>
</tr>

</table>
</form>


<?php 
include_once("authfootr.php"); 
?>
