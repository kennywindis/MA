<?php

$c=["naija", "ghana", "mali"];

echo count($c); //count short frm fr calln index of array nd count numbr of elements


for($t=0;$t<count($c);$t++){//list the elements
	echo $c[$t]. "<br>";
}
echo '<br>';

$n=[2, 4, 6, 8, 10];

$tt=0;
for($i=0;$i<count($n);$i++){

	$tt = $tt + $n[$i];
	
	if ($i==0){
		echo $n[$i];
	}
	
	else{
	  echo '+' . $n[$i];
	
	}
}

echo '= ' .$tt;

echo '<br><br>';

//index array

$p=["me", "yo", 100];

echo $p[0] .'<br>';
echo $p[1] .'<br>';
echo $p[2] .'<br>';

echo '<br>';

//associative array

$u =[

"fn" => "k",
"c"  => "naija",
"a" =>  100

];

//to gt output of associative array
echo $u['fn'];
echo $u['c'];
echo $u['a'];

echo '<br>';

//can still use loop(foreach) to  gt outpuT of associative array

foreach ($u as $k=>$v){
	echo "key is " . $k . " ". "and value is " . $v;
	echo '<br>';
}

echo '<br>';

//multidimensional array

$r=[

["me", "yo", 100],
["be", "yo", 110],
["yo", "yo", 120],

];

//diff ways to gt output of mdarray
//echo
//for loop
//as multi dimensional assoc array


//using echo to gt output fr mdarray
echo $r[0][0].'<br>';
echo $r[0][1].'<br>';
echo $r[0][2].'<br>';

echo $r[1][0].'<br>';
echo $r[1][1].'<br>';
echo $r[1][2].'<br>';

echo $r[2][0].'<br>';
echo $r[2][1].'<br>';
echo $r[2][2].'<br>';

echo '<br><br>';


//usinn for loop to gt output of mdarray

for ($a=0;$a<3;$a++){

	echo ($a+1) . $r[$a][0].'<br><br>';
	echo ($a+1) . $r[$a][1]. '<br><br>';
	echo ($a+1) . $r[$a][2]. '<br><br>';
			
}

echo '<br>';

//as multi dimensional associative array

$k=[

[
  "f" =>    "me", 
  "l" =>    "yo", 
  "n" =>     100
],

[
  "f" =>    "be", 
  "l" =>    "yo", 
  "n" =>     110
],


[
  "f" =>    "yo", 
  "l" =>    "yo", 
  "n" =>    120
],

];


echo $k[0]['f'];
echo $k[1]['f'];
echo $k[2]['f'];

echo '<br><br>';


//array functions

//count ()
//count numbr of element in array


//var_dump()
//show type of element in array

$we = [1,2,3,4,5,];


echo var_dump($we);

echo '<br><br>';

//print_r()

echo print_r($we);

echo '<br><br>';

//in_array()
//search element in array
//returns 1=true if element found in array
//returns 0/blank=false if nt found in array


echo In_array(5,$we);

echo '<br><br>';

//max() min()

echo max($we);
echo min($we);

echo '<br>';

//explode()
//split string into array

$dob ="2000-01-02";

$e= explode(".", $dob);

echo '<pre>';
echo print_r($e);
echo '<pre>';

echo '<br>';

//implode()
//join strings of array together


$im= ["gh", "mali", "lome"];

echo implode(", ", $im);

echo '<br>';


//sort(), sort/arrange element of array in acsending order
//rsort(), sort/arrange of array in desending order
//array_value()
//array_unique()

$yo = [1,1,2,3,4,5,5];

sort($yo);
//rsort($yo);

echo '<pre>';
echo print_r($yo);
echo '<pre>';

echo "<br>";

$ny=array_values(array_unique($yo));

echo '<pre>';
echo print_r($yo);
echo '<pre>';


//asort(),

$re =[
"nja" => 0,
"gh"  => 1,
"lome" => 2

];

//asort($re);
//krsort($re);

echo '<pre>';
echo print_r($re);
echo '<pre>';

