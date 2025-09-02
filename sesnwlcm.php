<?php

ob_start();
session_start();


if (!isset($_SESSION['uname']) || !isset($_SESSION['pwrd'])){//means if notting isset(has no value) then it will be redirected to the location inthe header
	

header('location:sesnma.php');
}

else{
if($_SESSION['uname'] == 'admin'  && $_SESSION['pwrd'] == '2244'){//this ment if somgthing isset(has the given value) then will be redirectd to header too
	
?>

<h2>wlcm to site</h2>
<p><a href="sesnlgut.php">lgut</a></p>


<?php
//simply continued php code frm above

}
else{
header('location: sesnma.php');

}

}


//all the above code cld be written this same way too, gv same output
//i prefer this frmt

//<?php

//ob_start();
//session_start();


//if (!isset($_SESSION['uname']) || !isset($_SESSION['pwrd'])):
	

//header('location:New4.php');


//else:
//if($_SESSION['uname'] == 'admin'  && $_SESSION['pwrd'] == '2244'):


//?>

<!--<h2>wlcm to site</h2>
<p><a href="sesnlgut.php">lgut</a></p>


//<?php



//else:
//header('location: New4.php');

//endif;

//endif;







