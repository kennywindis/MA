<?php

//if.. elseif.. else stmnt
$a= 10;

//if ($a == 11){
// echo " good";
//}

//else{
//echo " bland";
//}

//if ($a == 11):
 //echo " good";

//else:
//echo " bland";

//endif;


$yo = 19;

if($yo < 18):
 echo "yo nt grwn";
 
elseif($yo == 18):
  echo "yo grwn";
  
else :
  echo "yo ovr grwm";
  
endif;


echo "<br><br>";

//? : (tenary operator) is a short way of writing if..else stmnt
//?? (coalescing operator) is also a short way of writing if .. else stmnt

//Rule of thumb:

//Use ?? when you want "use this if it exists, otherwise default".
//Use ?: when you want "use this if it’s truthy, otherwise default".


//switch stmnt
$ctry = "ghana";

switch($ctry){

	case "naija":
	echo " frm naija";
	break;

	case "ghana":
	echo "frm ghana";
	break;
	
	case "mali":
	echo "frm mali";
	break;
	
	default:
	echo " mi nah knw where you frm";
	
}






