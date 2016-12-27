<?php include('header.timecard'); ?>

<?php

$host='dwd277.db.8715276.hostedresource.com';
$usrname= 'dwd277';
$pwrd= 'Sctd#5440';
$database= 'dwd277';

//connects to the database
$con = mysqli_connect($host, $usrname, $pwrd, $database);
// data from form needed to enter data info database
$userid= mysqli_real_escape_string($con, $_POST['userid']);
$username= mysqli_real_escape_string($con, $_POST['username']);
$firstname= mysqli_real_escape_string($con, $_POST['firstname']);
$lastname= mysqli_real_escape_string($con, $_POST['lastname']);
$punch= mysqli_real_escape_string($con, $_POST['punch']);
$stamp= mysqli_real_escape_string($con, $_POST['stamp']);

//This code runs if the form has been submitted

//This makes sure they did not leave any fields blank
if (!$_POST['username'] | !$_POST['userid'] | !$_POST['firstname'] | !$_POST['lastname']) {
	die('You did not complete all of the required fields');
}

$sql = "INSERT INTO timecard (user_id, user_name, punch_type, punch_stamp, first_name, last_name) VALUES ('$userid', '$username', '$punch', '$stamp', '$firstname', '$lastname')"; 



If(!mysqli_query($con,$sql)){
	Die('Error: '.mysqli_error($con));
}
Else{
	Echo'Your punch has been taken';
}

Mysqli_close($con);

?>

<?php include('footer.timecard'); ?>