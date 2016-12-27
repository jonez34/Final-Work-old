<?php

$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';


$con = mysqli_connect($host, $usrname, $pwrd, $database);

$title= mysqli_real_escape_string($con, $_POST['title']);
$author= mysqli_real_escape_string($con, $_POST['author']);
$year= mysqli_real_escape_string($con, $_POST['year']);
$type= mysqli_real_escape_string($con, $_POST['type']);




$sql = "INSERT INTO library (title, author, year, type) VALUES ('$title','$author', '$year', '$type') ";



If(!mysqli_query($con,$sql)){
	Die('Error: '.mysqli_error($con));
}
Else{
	Echo'Your data has been submitted, check your comment <a href="index.php">here.</a>';
}

Mysqli_close($con);

?>