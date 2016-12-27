<?php

$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';

//connects to the database
$con = mysqli_connect($host, $usrname, $pwrd, $database);
// data from form needed to enter data info database
$name= mysqli_real_escape_string($con, $_POST['name']);
$emailaddress= mysqli_real_escape_string($con, $_POST['emailaddress']);
$username= mysqli_real_escape_string($con, $_POST['username']);
$password= mysqli_real_escape_string($con, $_POST['password']);

//This code runs if the form has been submitted
// (isset($_POST['submit'])) { 
//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['name'] | !$_POST['emailaddress'] | !$_POST['password']) {
	die('You did not complete all of the required fields');
}
// checks if the username is in use
if (!get_magic_quotes_gpc()) {
	$_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$check = mysqli_query($con, "SELECT username FROM users WHERE username = '$usercheck'") 
or die(mysqli_error());
$check2 = mysqli_num_rows($check);
//if the name exists it gives an error
if ($check2 != 0) {
 	die('Sorry, the username '.$_POST['username'].' is already in use.');
}


$sql = "INSERT INTO users (name, emailaddress, username, password) VALUES ('$name', '$emailaddress', '$username', '$password')"; 



If(!mysqli_query($con,$sql)){
	Die('Error: '.mysqli_error($con));
}
Else{
	Echo'Your Registration have been submitted, please <a href="login.php">login.</a>';
}
//}
Mysqli_close($con);

?>