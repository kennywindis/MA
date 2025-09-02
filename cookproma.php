<?php

if(isset($_REQUEST['frm'])) {//can use $_POST too
	
setcookie('pl', $_REQUEST['pple'], time() + (86400));
header('location:cookproma.php');


}

?>

<html>
<head>

<title>cookie mini proj</title>


</head>

<body>

<?php if(!isset($_COOKIE['pl'])): ?>

<form action = "" method="post">

<table>

<tr>

<td>Select person to vote:</td>

<td>
<select name="pple">
 <option value="t">tinu</option>
 <option value="o">obi</option>
 <option value="a">atu</option>
</select>
</td>

</tr>

<tr>
<td></td>
<td><input type="submit" value="submit" name="frm"></td>
</tr>

</table>

</form>

<?php else: ?>
you have already given vote to <?php echo $_COOKIE['pl']; ?>. please come after 24 hours .

<?php endif; ?>

</body>




