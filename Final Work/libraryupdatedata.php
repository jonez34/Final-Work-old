<?php

$host='spartandevelomentcom.ipagemysql.com';
$usrname= 'spartandb';
$pwrd= 'shadow34';
$database= 'spartandb';


$con = mysql_connect($host, $usrname, $pwrd, $database);

$itemid= mysql_real_escape_string($con, $_POST['itemid']);
$title= mysql_real_escape_string($con, $_POST['title']);
$author= mysql_real_escape_string($con, $_POST['author']);
$year= mysql_real_escape_string($con, $_POST['year']);
$type= mysql_real_escape_string($con, $_POST['type']);




$sql = "UPDATE library SET title = '$title', author = '$author', year = '$year', type = '$type' WHERE itemid = '$itemid'";



If(!mysql_query($con,$sql)){
	Die('Error: '.mysql_error($con));
}
Else{
	Echo'Your data has been submitted, check your  entry<a href="libraryupdate.php">here.</a>';
}

Mysql_close($con);

?>