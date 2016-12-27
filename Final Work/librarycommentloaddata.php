<?php
//database info
$host='spartandevelomentcom.ipagemysql.com';
$usrname= 'spartandb';
$pwrd= 'shadow34';
$database= 'spartandb';

//COnnection to database
$con = mysql_connect($host, $usrname, $pwrd, $database);
//Data posted from form
$itemid= mysql_real_escape_string($con, $_POST['hiddenid']);
$username= mysql_real_escape_string($con, $_POST['hiddenname']);
$comment= mysql_real_escape_string($con, $_POST['comment']);
echo $itemid;
//Sql statement to pull data from database
$sql = "SELECT * FROM login WHERE username = '$username'";
$query = mysql_query($con, $sql);
//Creates array to get Name Data
$row = $query->fetch_array();
$name = $row['name'];

// Sql data insert into librarycomment database
$sql2 = "INSERT INTO librarycomments (name,comment, itemid) VALUES ('$name','$comment','$itemid')";


// checks that the data submitted with not sql errors
If(!mysql_query($con,$sql2)){
	Die('Error: '.mysql_error($con));
}
Else{
	Echo'Your comment have been submitted, check your comment <a href="index.php">here.</a>';
}

Mysql_close($con);

?>