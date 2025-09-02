<?php

if (!isset($_COOKIE['uname']) || !isset($_COOKIE['pwrd'])):
	
	header("location:cp.php");


else:

   if  ($_COOKIE['uname'] == 'yo'  &&  $_COOKIE['pwrd']  == '1212'):
	
	
?>	

<!-- intro html in btw the php, cool-->		
<h2>wlcm to dashbrd</h2>
<p><a href="cplogut.php">logut</a></p>	
	
<?php

//cotinued php code frm above, jst insertd a likkle html in btw	
	
else:

   header ("location: cp.php");
   
endif;//due to 2 'if' used inna code nt dt 'else'

endif;//due to 2 'if' used inna code nt dt 'else'





