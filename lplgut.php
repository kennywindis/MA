<?php

ob_start();
session_start();
unset($_SESSION['urtype']);
header("location:lstprvma.php");
exit;