<?php
session_start();
$myusername = $_SESSION['myusername'];

//database info
$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';

//connection to database
$con = mysqli_connect($host, $usrname, $pwrd, $database);

$password= mysqli_real_escape_string($con, $_POST['password']);


//update database user password
$sql = "UPDATE login SET password = '$password' WHERE username = '$myusername'";


If(!mysqli_query($con,$sql)){
	Die('Error: '.mysqli_error($con));
}
Else{
	Echo'Your has been changed, please return to <a href="login.php">login page.</a>';
}

Mysqli_close($con);

?>


