<?php

//jst used to destroy cookie

setcookie('uname', '', time()-1);
setcookie('pwrd', '', time()-1);

header('location: cp.php');// anytime yo wrtng header('location:defo.php') the colon in front of location must be written closeto it without space, like this ('location:defo.php') fr bro mi did dt mistake and gt error until mi correctd it misef

