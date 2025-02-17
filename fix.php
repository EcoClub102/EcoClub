<?php
require_once "config.php";
	$sql1 = "SELECT username FROM users WHERE balance!=0";
	$result1 = $conn->query($sql1);
	 
	while ($row1 = mysqli_fetch_array($result1)) {
	$user=$row1['username'];
	$opt9="SELECT COUNT(*) as total9 FROM `signin` WHERE username='$user' ";
	$optres9=$conn->query($opt9);
	$sum9= mysqli_fetch_assoc($optres9);
	$days=($sum9['total9'])*10;
	$sql9="UPDATE users SET  balance = balance-$days WHERE username='$user'" ;
    $conn->query($sql9); 
	}
?>