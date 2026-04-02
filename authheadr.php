<?php

ob_start();
session_start();//here, to start/open session fr session used in login 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

include 'authcon.php';

?>

<html>

<head>

<title> authentication system </title>

<link rel="stylesheet" href="authstyl.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="wrappr">
<div class="containr">

<div class="nav">
<ul>

<li><a href="<?php echo BASE_URL; //good practice to call base url, nt nessry, but good ?>authindex.php">Home</a></li>

<?php
//here, is to disable only reg, lgn pg not to show when nutzer login
if(!isset($_SESSION['nutzer'])):
?>

<li><a href="<?php echo BASE_URL; //good practice to call base url, nt nessry, but good ?>authreg.php">Registration</a></li>
<li><a href="<?php echo BASE_URL; //good practice to call base url, nt nessry, but good ?>authlgn.php">Login</a></li>

<?php
endif;
?>

<?php
//here, is to enable only dshbrd, lgut pg to show when nutzer login
if(isset($_SESSION['nutzer'])):
?>

<li><a href="<?php echo BASE_URL; //good practice to call base url, nt nessry, but good ?>authdshbrd.php">Dashboard</a></li>
<li><a href="<?php echo BASE_URL; //good practice to call base url, nt nessry, but good ?>authlgut.php">Logout</a></li>

<?php
endif;
?>

</ul>
</div>

<div class="mane">










