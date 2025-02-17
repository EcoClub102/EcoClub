<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'quick-win');
define('DB_PASSWORD', 'quick-win');
define('DB_NAME', 'quick-win');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

 date_default_timezone_set('Asia/Kolkata');

	$query = "SELECT username,balance FROM `users` WHERE balance>=500 ";  
$result = mysqli_query($conn, $query); 

while ($row2 = mysqli_fetch_array($result)) {
     $user=$row2['username'];
     $balance=$row2['balance'];
     $am=$balance*0.008;
    $sql="UPDATE users SET balance=balance+$am WHERE username='$user'";
   
     $sql1="INSERT INTO intrest (username,balance,amount) VALUES ($user,$balance,$am)";
     $conn->query($sql);
     $conn->query($sql1);

}
?>