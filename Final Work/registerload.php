<?php

include('loginfunctions.php');
$newpassword = new login;
$password = $newpassword->buildpassword();
//database info
//$host='hryjones277.db.8715276.hostedresource.com';
//$usrname= 'hryjones277';
//$pwrd= 'Sctd#4577';
//$database= 'hryjones277';

//connects to the database
//$con = mysqli_connect($host, $usrname, $pwrd, $database);
// data from form needed to enter data info database
$name= mysql_real_escape_string($newpassword->dbconn(), $_POST['name']);
$emailaddress= mysql_real_escape_string($newpassword->dbconn(), $_POST['emailaddress']);
$username= mysql_real_escape_string($newpassword->dbconn(), $_POST['username']);

//creates random password
//$digit = rand (1,4);
//$digit2 = rand (5,9);
//$s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
//$t = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 3)), 0, 3);
//$q = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 4)), 0, 4);
//$z = substr(str_shuffle(str_repeat("~!@#$%^&*()_+-={}|[]\:;<>?,./", 1)), 0, 1);

//$password=$digit.$s.$z.$q.$digit2.$t;

//This code runs if the form has been submitted
// (isset($_POST['submit'])) { 
//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['name'] | !$_POST['emailaddress'] ) {
	die('You did not complete all of the required fields');
}
// checks if the username is in use
if (!get_magic_quotes_gpc()) {
	$_POST['username'] = addslashes($_POST['username']);
}
$usercheck = $_POST['username'];
$check = mysql_query($newpassword->dbconn(), "SELECT username FROM users WHERE username = '$usercheck'") 
or die(mysql_error($newpassword->dbconn()));
$check2 = mysql_num_rows($check);
//if the name exists it gives an error
if ($check2 != 0) {
 	die('Sorry, the username '.$_POST['username'].' is already in use.');
}

// creates sql load into database
$sql = "INSERT INTO users (name, emailaddress, username, password) VALUES ('$name', '$emailaddress', '$username', '$password')"; 


// makes sure that the sql connection and sql data loaded into database
If(!mysql_query($newpassword->dbconn(),$sql)){
	Die('Error: '.mysql_error($newpassword->dbconn()));
}
Else{
	Echo'Your Registration have been submitted, please <a href="login.php">login.</a>';
	//Prepares email to send to user for login info
$to      = $emailaddress;
$subject = 'Your login info.';
$message = 'Your login information is Username:'.' ' . $username . ' '.'Password:' .' '. $password ;
$headers = 'From: jonez34@gmail.com' . "\r\n" .
    'Reply-To: jonez34@gmail' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

}
//}
Mysql_close($newpassword->dbconn());

?>