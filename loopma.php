<?php

//loop mst hv 3 things
//intialization $b=1
//increment/decrement $b++
//condition $b<=>8

//how loop wrks
//b=1, (iteration) 1<=30 2=1 (output)
//     (iteration) 2<=30 3=2  (output)
//      (iterate)  3<=30 4=3 (output)

//abv means it keeps the next value, prints the intial value

//while loop

$b =1;

while($b < 8) {
	echo "n <br>" ."<br>";
	$b++;
}


//while(1) {
//	echo "n <br>";
//	$b++;
	
//	if($b > 4) {
//		break;
//	}
//}


//do .. while

$c=1;

do{

echo "gh<br>";
$c++;

}

while ($c < 8);

echo "<br><br>";


//for loop

for ($k=1;$k<=30;$k++){
	echo "mali<br>"."<br>";
	//echo $k.'';//list all numbs uptill 80
	
}

echo '<br><br>';


$d=[1, 2, 3, 4];
for($v=0;$v<=3;$v++){
	echo $d[$v].'<br>';
}

echo '<br><br>';

for ($t=1;$t<=10;$t++){
	if($t==5) {
		//break; //means just jump out of loop
		continue; //ommit and continue iteration
	}
	echo $t;
	
}

echo '<br><br>';

//for ($tk=1;$tk<=10;$t++){
	//if($t%2 == 0) {
		//break; //means just jump out of loop
		//continue; //ommit and continue iteration
	//}
	//echo $t.'';//list all numbrs 
	
//}

echo '<br><br>';

//foreach loop

$ar = ["lg", "og", "kw"];
foreach($ar as $hr){
	echo $hr. '<br>';
}

echo'<br>';

$a = [
"un" => "ken",
"age" => 20,
];

foreach($a as $ky => $v){
	echo 'key is :'. $ky . 'and val is ' . $v .'<br>';
}


echo "<br><br>";


//nested loop
//means calling nother loop inside another loop
//also mean the inner loop
//when value of outer loop increment, inr loop complete it iteration
//when the value of the loop variable in innr loop is TRUE it print out, but when it is FALSE nttin is printd out, it goes bk to the outr loop and start again

//nested = inner loop = main loop
//the middle/2nd condition of the nested(inner) loop is the one to obey, then follow the last condition/3rd  of the nested loop

for ($q=1;$q<=10;$q++){
echo "q=".$q.": ";
	
 for($cd=1;$cd<=10;$cd++){
 echo $cd . " "; 
	}
	echo "<br>";
}

echo '<br>';


//when jj=1 yu=1, 1
//when jj=2 yu=1,1 then yu=2,2
//when jj=3 yu=1,1 then yu=2,2 then yu=3,3
//when jj=4 yu=1,1 then yu2,2 then yu=3,3  then yu=4,4

//1
//1 2
//1 2 3
//1 2 3 4

for ($jj=1;$jj<=4;$jj++){

	for($yu=1;$yu<=$jj;$yu++){
		echo $yu . '';
	}
	
	echo '<br>';
}

echo "<br>";


// 1 2 3 4
// 1 2 3
// 1 2
// 1

//main loop explanation
//first cndtn stmnt $o=1    (constant initial value)
//second/middle cndtn stmnt $o=$fs, ($fs start frm 4 decrease/goes($fs--) to 1, when $fs = 4, $o=4, when $fs = 3, $o=3 till it gt to 1), 1<=4, 3rd/last cndtn $o++ = 1+1 this will run until it get to 4 ans = 1 2 3 4, 
//"                 "                          "                                                                                         1<=3, 3rd/last cndtn $o++ = 1+1 this will run until it get to 3 ans = 1 2 3 
//"                 "                          "                                                                                         1<=2, 3rd/last cndtn $o++ = 1+1 this will run until it get to 2 ans = 1 2, 
//"                 "                          "                                                                                         1<=1, 3rd/last cndtn $o++ = 1+1 this will run until it get    1 ans = 1
//rzn it it all ending @ 4 3 2 1 is becos 3rd cndtn stmnt must obey the 2nd cndntn stmnt($o<=$fs, $fs goes frm 4 to 1)

for ($fs=4;$fs>=1;$fs--){

	for($o=1;$o<=$fs;$o++){//main  loop, 
		echo $o . '';
	}
	
	echo '<br>';
}

echo '<br>';


//1
//2 1
//3 2 1
//4 3 2 1

//main loop explanation
//first cndtn $yk=$kk ($kkstarts frm $kk=1 to 4), so when $kk =1 $yk =1, till $kk=4 $yk=4(first condition), 
//second cndtn $yk>=1, then 1>=1 2>=1 3>=1 4>=1, 
//third condition $yk--,1-1=0 ans 1 0(but 0 is nt written out), 
//  "        "          2-1=1 ans 2 1, till gt to 1
//  "        "          3-1=2 ans 3 2 1, till  gtto 1 
//  "        "          4-1=3 ans 4 3 2 1 , till gtto 1
//reason why it allending @ 1 is because it must obey the second/middle condition stmnt which is ($yk>=1) must equate to 1= all 3rd cndtn  will all run till it gt to =1
  
for ($kk=1;$kk<=4;$kk++){

	for($yk=$kk;$yk>=1;$yk--){//main loop, 
		echo $yk . '';
	}
	
	echo '<br>';
}

echo '<br>';


//4 3 2 1
//4 3 2
//4 3
//4

//main loop explntn
//1st condition stmnt $yr = 4 (constant initial value)
//2nd/middle condition stmnt $yr>=$fr($fr start frm 1 to 4),so when 4>=1  3rd cndtn stmnt $yr-- 4-1 =3 till it get to 1 ans 4 3 2 1, 
// "   "       "                                               when 4>=2  3rd cndtn stmnt $yr-- 4-1 =3 till it get to 2 ans 4 3 2                                                            
// "   "       "                                               when 4>=3  3rd cndtn stmnt $yr-- 4-1 =3 till it get to 3 ans 4 3        
// "   "       "                                               when 4>=4  3rd cndtn stmnt $yr-- 4-1 =3 till gt 4 ans 4
//rzn it all ending @ 1, 2, 3, 4 it mst obey the 2nd/middle cndtn stmnt ($yr>=$fr), when 4>=1 3rd cndtn must obey till it gt to 1, when 4>=2 3rd cndtn must obey till it gt to 2 and so on

for ($fr=1;$fr<=4;$fr++){

	for($yr=4;$yr>=$fr;$yr--){//main loop
		echo $yr . '';
	}
	
	echo '<br>';
}

echo '<br>';


//      1 
//    2 1 2 
//  3 2 1 2 3
//4 3 2 1 2 3 4

$tot = 4;

  for ($l=1;$l<=$tot;$l++){//outr loop

     for ($pp=$tot-1;$pp>=$l;$pp--){
	
	  echo '&nbsp;&nbsp;';
   }

  for($m=$l;$m>=1;$m--){//main loop
	echo $m . '';
	}
   
  for ($pr= $tot-2;$pr<=$l;$pr++){//main loop
   echo  $pr. ' ';
   	
   }
	
	echo '<br>';
   }

echo"<br><br>";

//1 2 3 4 5
//2 3 4 5
//3 4 5
//4 5
//5

//main loop explntn
//1st condition stmnt $yrr = $frr   (initial value)
//2nd/middle condition stmnt $yrr<=5 ($frr start frm 1 to 5),so when 1<=5  3rd cndtn stmnt $yrr++ 1+1 =2 start frm 1 till it get to 5 ans 1 2 3 4 5, 
// "   "       "                                                when 2<=5  3rd cndtn stmnt $yrr++ 2+1 =3 start frm 2 till it get to 5 ans 2 3 4 5                                                            
// "   "       "                                                when 3<=5  3rd cndtn stmnt $yrr++ 3+1 =4 start frm 3 till it get to 5 ans 3 4 5       
// "   "       "                                                when 4<=5  3rd cndtn stmnt $yrr++ 4+1 =5 start frm 4 till it gt  to 5 ans 4 5
// "   "       "                                                when 5<=5  3rd cndtn stmnt $yrr++ 5+=5   start frm 5         gt  to 5 ans 5
//rzn it all ending @ 5 it mst obey the 2nd/middle cndtn stmnt ($yrr<=5), when 1<=5 3rd cndtn must obey/run till it gt to 5, when 2<=5 3rd cndtn must obey/run till it gt to 5 and so on



//nested = inner loop = main loop

//the middle/2nd condition of the nested(inner) loop is the one to obey, then follow the last condition/3rd  of the nested loop


for ($frr=1;$frr<=5;$frr++){

	for($yrr=$frr;$yrr<=5;$yrr++){//main loop
		echo $yrr . '';
	}
	
	echo '<br>';
	
}

echo '<br>';










