<?php 
//database info
$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';

//connects to the database
$con = mysqli_connect($host, $usrname, $pwrd, $database);
// data from form needed to enter data info database
$username= mysqli_real_escape_string($con, $_POST['username']);

//creates random password
$digit = rand (1,4);
$digit2 = rand (5,9);
$s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
$t = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 3)), 0, 3);
$q = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 4)), 0, 4);
$z = substr(str_shuffle(str_repeat("~!@#$%^&*()_+-={}|[]\:;<>?,./", 1)), 0, 1);

$password=$digit.$s.$z.$q.$digit2.$t;

// checks if the username is in use
if (!get_magic_quotes_gpc()) {
	$_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$query = "SELECT username, emailaddress FROM users WHERE username = '$username'";
$check = mysqli_query($con, $query );
$check2 = mysqli_num_rows($check);


//if the name exists it gives an error

if ($check2 != 1) {
 	die('Sorry, the username '.$_POST['username'].' is not register. Please enter a valid user name.<a href="lostpassword.php">.</a>');
}

$sql = "UPDATE users SET password = '$password' WHERE username = '$username'";


If(!mysqli_query($con,$sql)){
	Die('Error: '.mysqli_error($con));
}
Else{
	
	//Prepares email to send to user for login info
while ($rows=mysqli_fetch_assoc($check)){
$emailaddress= $rows['emailaddress'];
$username = $rows['username'];

$to      = $emailaddress;
$subject = 'Your login info.';
$message = 'Your login information is Username:'.' ' . $username . ' '.'Password:' .' '. $password ;

mail($to, $subject, $message);

}
Echo'Your password has been changed and emailed to the registered email. Please return to <a href="login.php">login page.</a>';
	
}

Mysqli_close($con);














?>