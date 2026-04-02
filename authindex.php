<?php
include_once("authheadr.php");
?>


<h2> Welcome to our website</h2>
<p>
You can register in thihs website and create account
</p>

<h2 class= "mt_20 mb_10">All Registered users</h2>

<table class="t1">

<tr>
<th>SL</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
</tr>

<?php
//here,is to also mk sure data to be displayed is same data stored/gotten in db

$k = 0;//this is for id to mk it start displayn on pg startn frm 1 instd id frm numbr in/frm db, a loop ting

$i = $be->prepare("SELECT *FROM users WHERE status=?");//here, status =1 means that only verified registrd user frm db would be able to hv data displayed in home pg
$i->execute([1]);
$fk = $i->fetchAll(PDO::FETCH_ASSOC);
foreach($fk as $roll){
	    $k++;//to replace id fr display on pg contd
	    
       echo "<tr>";
       echo "<td>". $k . "</td>";//to replace id fr dsplay onpg contd
       echo "<td>". $roll['firstname'] . "</td>";
       echo "<td>". $roll['lastname'] . "</td>";
       echo "<td>". $roll['email'] . "</td>";
       echo "<td>". $roll['phone'] . "</td>";
       echo "</tr>";
       
       //there are 2 other ways to write html inside php
       //MA, used mthd where after wrtng 'foreach(){, closed php and write out html table and after opened php then added } to close it
       //other, one is use php shorthand of php  jst use, <?= then close instd of wrtng <?php 
       
}

?>



</table>


<?php 
include_once("authfootr.php"); 
?>


