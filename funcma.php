<?php


//function 

function k(){
	$l=9;
	$m=10;
	
	echo $l+$m;
}

k();//call function


function of(){
	
	$u=9;
	$r=9;
	
	return$u+$r;
}

echo of();//return needs echo fr ouput to call function

echo '<br>';


//this frmt of wrtin out the func is practical/effective cuz it reusable
function off($uy,$ru){
	
	return$uy+$ru;
}

echo off(10,10);

echo '<br><br>';


//function prac xmple

function p ($nu){

	for ($kk=1;$kk<=$nu;$kk++){

	for($yk=$kk;$yk>=1;$yk--){//main loop, 
		echo $yk . '';
	}
	
	echo '<br>';
}

}

p(9);





