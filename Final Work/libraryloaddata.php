<?php

$host='spartandevelomentcom.ipagemysql.com';
$usrname= 'spartandb';
$pwrd= 'shadow34';
$database= 'spartandb';


$con = mysql_connect($host, $usrname, $pwrd, $database);

$title= mysql_real_escape_string($con, $_POST['title']);
$author= mysql_real_escape_string($con, $_POST['author']);
$year= mysql_real_escape_string($con, $_POST['year']);
$type= mysql_real_escape_string($con, $_POST['type']);




$sql = "INSERT INTO library (title, author, year, type) VALUES ('$title','$author', '$year', '$type') ";



If(!mysql_query($con,$sql)){
	Die('Error: '.mysql_error($con));
}
Else{
	Echo'Your data has been submitted, check your comment <a href="index.php">here.</a>';
}

Mysql_close($con);

?>