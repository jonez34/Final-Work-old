<?php
//code used to end saved login session
session_start();
if (!isset( $_SESSION['myusername'] ) ){
header("location:login.php");
}
else{
header("location:commentsload.php");
}
//if(!session_is_registered(myusername)){
//header("location:main_login.php");
// resource from url:(http://www.phpeasystep.com/phptu/6.html)
?>
