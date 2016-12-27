<?php
//database info
$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';

//COnnection to database
$con = mysqli_connect($host, $usrname, $pwrd, $database);
//Data posted from form
$username= mysqli_real_escape_string($con, $_POST['hiddenid']);
$comment= mysqli_real_escape_string($con, $_POST['comment']);
//Sql statement to pull data from database
$sql = "SELECT * FROM login WHERE username = '$username'";
$query = mysqli_query($con, $sql);
//Creates array to get Name Data
$row = $query->fetch_array();
$name = $row['name'];

// Sql data insert into commentbox database
$sql2 = "INSERT INTO commentbox (name,comment) VALUES ('$name','$comment') ";


// checks that the data submitted with not sql errors
If(!mysqli_query($con,$sql2)){
	Die('Error: '.mysqli_error($con));
}
Else{
	Echo'Your comment have been submitted, check your comment <a href="comments.php">here.</a>';
}

Mysqli_close($con);

?>