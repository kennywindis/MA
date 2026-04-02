<?php

include_once('authheadr.php');

//unsetting/closing session and rdrctn it bk to login pg
unset($_SESSION['nutzer']);
header('location: ' .BASE_URL. 'authlgn.php');
exit;//for safety
