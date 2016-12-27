<?php
//database info
$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';

//COnnection to database
$con = mysqli_connect($host, $usrname, $pwrd, $database);
//Data posted from form
$itemid= mysqli_real_escape_string($con, $_POST['hiddenid']);
$username= mysqli_real_escape_string($con, $_POST['hiddenname']);
$comment= mysqli_real_escape_string($con, $_POST['comment']);
echo $itemid;
//Sql statement to pull data from database
$sql = "SELECT * FROM login WHERE username = '$username'";
$query = mysqli_query($con, $sql);
//Creates array to get Name Data
$row = $query->fetch_array();
$name = $row['name'];

// Sql data insert into librarycomment database
$sql2 = "INSERT INTO librarycomments (name,comment, itemid) VALUES ('$name','$comment','$itemid')";


// checks that the data submitted with not sql errors
If(!mysqli_query($con,$sql2)){
	Die('Error: '.mysqli_error($con));
}
Else{
	Echo'Your comment have been submitted, check your comment <a href="index.php">here.</a>';
}

Mysqli_close($con);

?>