<?php
session_start();
$myusername = $_SESSION['myusername'];

//database info
$host='spartandevelomentcom.ipagemysql.com';
$usrname= 'spartandb';
$pwrd= 'shadow34';
$database= 'spartandb';

//connection to database
$con = mysql_connect($host, $usrname, $pwrd, $database);

$password= mysql_real_escape_string($con, $_POST['password']);


//update database user password
$sql = "UPDATE users SET password = '$password' WHERE username = '$myusername'";


If(!mysql_query($con,$sql)){
	Die('Error: '.mysql_error($con));
}
Else{
	Echo'Your password has been changed, please return to <a href="login.php">login page.</a>';
}

Mysql_close($con);

?>


