<?php
//basically yo fi wrk wid dah login system using cookie

if(isset($_POST['fm'])){

  //echo $_REQUEST['chk']; //chk for the value of chk
  
  if($_REQUEST['uname'] =='yo' && $_REQUEST['pwrd'] =='1212'){//for validation of the form
  
    setcookie('uname', $_REQUEST['uname'], time() + (86400));
    setcookie('pwrd', $_REQUEST['pwrd'], time() + (86400));
    setcookie('chk', $_REQUEST['chk'], time() + (86400));
    
    header('location:cpwlcm.php');
  
  }
  
  else{
  
    header('location:cp.php');
  }
  
}

?>


<html>

<head>
<title> cookie login </title>
</head>

<body>

<form action = "" method="post">

<table>

<tr>
<td>usname:</td>
<td><input type="text" name="uname"></td>
</tr>

<tr>
<td>pswrd:</td>
<td><input type="password" name="pwrd"></td>
</tr>

<tr>
<td>rembr:</td>
<td>
<input type="hidden" name="chk" value="0" ><!--to avuoid/clear any undefnd error-->
<input type="checkbox" name="chk" value="1"  
<?php 
if(isset($_COOKIE['chk']))://after settn 'chk' to/in cookie, used to confirm dh chk/chk box will rembr yo when yo click if it as a value(means if it has been clicked)
  if($_COOKIE['chk']==1):
    echo 'checked';//A checkbox is ticked when the HTML looks like: <input type="checkbox" checked>, Writing 'chckd bro' in PHP simply outputs random text inside the <input> tag, which is invalid HTML.
                   
endif;
endif; 
   
?>>
</td>
</tr>

<tr>
<td></td>
<td><input type="submit" value="login" name="fm"></td>
</tr>


</table>

</form>


</body>

<?php

//Why your PHP needs to output/echo 'checked' , when you do: <?php if($condition) echo 'checked'; 

//the HTML that gets sent to the browser will be: <input type="checkbox" checked>

//That’s what the browser recognizes and uses to draw the tick mark.Browsers are picky, they only tick a checkbox when they see the exact attribute 'checked' (with or without a value).
//Browsers only understand specific attributes,In HTML input elements have a set of defined attributes (type, name, value, checked, etc.).

//That’s why in PHP you must echo 'checked' instead of random text.





