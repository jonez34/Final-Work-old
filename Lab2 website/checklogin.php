<?php
// resource from url:(http://www.phpeasystep.com/phptu/6.html)
// 
$host="hryjones277.db.8715276.hostedresource.com"; // Host name 
$username="hryjones277"; // Mysql username 
$password="Sctd#4577"; // Mysql password 
$db_name="hryjones277"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['myusername'] = $myusername;
header("location:login_success.php");
//session_start();
//session_register("myusername");
//session_register("mypassword"); 

}
else {
// points back to the login on failure
echo ('Wrong Username or Password, please <a href="login.php">try again</a>');
}
?>