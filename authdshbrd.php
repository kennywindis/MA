<?php
include_once("authheadr.php");
?>

<?php
if(!isset($_SESSION['nutzer'])){//here, if user/pzn is not registered/no data of user , rdrct bk to base
	header('location:' .BASE_URL. 'authindex.php');//MA left his code wid 'BASE_URL'(parent directory of project) becos directory only consist of everytin abt particular projt so it goes bk to index pgof particular projt for MA, but fr mine index pg shw all other projts nd to avoid dt and mk it rdrctbk to particular projt index pg i include "authindex.php"
	exit;
}
?>


<h2 class="mb_10">Dashboard</h2>
<p> Hi <?php echo $_SESSION['nutzer']['firstname']; ?> , Welcome to dashboard</p>

<h2 class="mt_20">Your Profile info</h2>
<table class="t1">

<tr>
<td>First Name:</td>
<td><?php echo $_SESSION['nutzer']['firstname'];//here, is to mk data dispalyed on web pg to = stored data from db?></td>
</tr>

<tr>
<td>Last Name:</td>
<td><?php echo $_SESSION['nutzer']['lastname'];?></td>
</tr>

<tr>
<td>Email:</td>
<td><?php echo $_SESSION['nutzer']['email'];?></td>
</tr>

<tr>
<td>Phone:</td>
<td><?php echo $_SESSION['nutzer']['phone'];?></td>
</tr>

</table>


<?php 
include_once("authfootr.php"); 
?>