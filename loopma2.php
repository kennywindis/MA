<html>

<title> loop  to create xply table </title>

<style>

.item {
	width: 15%;
	height:auto;
	float:left;
	padding:20px;
	border: 1px solid #666;
	margin-right:10px;
	font-size:20px;
	margin-bottom: 20px;
}

.item-box{
width:100%;
}

</style>

<body>

<div class="item-box">

<?php
for($ya=1;$ya<=10;$ya++){
	

?>

<div class="item">

<?php

for($he=1;$he<=10;$he++){
	echo '<div>';
	echo $ya .  ' x ' . $he . '=' . ($he*$ya);
	echo '</div>';
}

?>


</div>

<?php
}

?>

</div>

</body>