<?php

include_once('authheadr.php');

if(!isset($_REQUEST['em']) || !isset($_REQUEST['token'])) {//if no input value for email and token, rdrct bk to base url/parent link/parent directory, also REQUEST here is used to 'get' nt 'post'
	header('location:' .BASE_URL);
}

//here is to confirm its values from db
$stmnt = $be->prepare('SELECT * FROM users WHERE email=? AND token=?');
$stmnt->execute([$_REQUEST['em'], $_REQUEST['token']]);
$to = $stmnt->rowCount();//means count/check/confirm if value is present in each rows
if($to) {//and if so...

  //here, isto activate and update token and status value
  $stmnt = $be->prepare("UPDATE users SET token=?, status=? WHERE email=? AND  token=?");
  $stmnt->execute(['', 1, $_REQUEST['em'],$_REQUEST['token']]);//token is nt needed after reg is sucs/verfd, wch why its value is ''(empty), status = 1(means reg completed and sucs/verfd and user can be able to login after, becos if status value remained at 0, user cannt login after caux user reg ws nt verifd
	header('location: '.BASE_URL.'authregsucs.php');
}
else{
   header('location:' .BASE_URL);
}


