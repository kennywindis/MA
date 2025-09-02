<?php

//echo 'k';

//set cookie
//setcookie('fullname', 'ken caleb', time() + (86400));
setcookie('usrname', 'kenny', time() + (86400 * 5));

//delete cookie
//setcookie('fullname', 'ken caleb', time() - 1);
//setcookie('usrname', 'kenny', time() - 1);

echo $_COOKIE["usrname"];
