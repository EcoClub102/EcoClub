<?php
/*
This file contains database config.phpuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'quick-win');
define('DB_PASSWORD', 'quick-win');
define('DB_NAME', 'quick-win');
// Try connecting to the Database
$conn = mysqli_connect(localhost, quick-win, quick-win, quick-win);

 date_default_timezone_set('Asia/Calcutta');
    $today = date("F j, Y, g:i a"); 
//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
    Echo"Fail";
}

?>
