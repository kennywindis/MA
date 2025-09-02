<?php

//2 main important type
//preg_match
//preg_replace

//online platform to practice  regex, regex101.com

//preg_match
$s ="me@mine.com";

if(preg_match("/[a-zA-Z0-9]+@+[0-9a-zA-Z]+\.[a-z]{2,5}$/", $s)){//to match expressions, $ to maintain string pattern
	echo 'email good';
}
else{
   echo 'email nt good';
}

//preg_replace
$st ="ghana is a country, ghana i like them girls";

echo preg_replace("/^ghana/", "rwanda", $st);//preg_replace is used to rplace strig and everything, ^ used to effect only first string, integer or anything first in the code


//still preg_match wid numbrs
$num = "01829999";

if(preg_match("/^[0-9]{3}+[0-9]{3}+[0-9]{2}$/", $num)){//[0-9] is for  the range of numbrs and {3}/{2} amt/length of numbrs, this brk it dwn into 3 patrn
	echo 'numbr good';
}
else{
   echo 'numbr nt good';
}


//another preg_match wid numbrs
$n="01829999";

if(preg_match("/^01+(8|7|6)+[0-9]{5}$/", $n)){// another wayof writing regex  01 =first numbr, (8|7|6) rep at least one of the third numbr, [0-9] rep range of last remaing numbrs and {5} rep amt/length of remaining numbr
	echo 'fr';
}
else{
   echo 'nt fr';
}

//echo preg_match("/^[0-9]{3}+[0-9]{3}+[0-9]{2}$/", $num);