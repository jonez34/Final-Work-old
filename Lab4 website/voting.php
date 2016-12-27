<?php


error_reporting(-1);
ini_set('display_error', 'On');

$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';

//connects to the database
$con = mysqli_connect($host, $usrname, $pwrd, $database);
	
// data from form needed to enter update data info in database
$ip = mysqli_real_escape_string($con, $_POST['hiddenip']);
$itemid = mysqli_real_escape_string($con, $_POST['hiddenid']);
$vote = mysqli_real_escape_string($con, $_POST['vote']);

$sql2 = "SELECT * FROM votes WHERE ip = '$ip' and itemid = '$itemid' and vote = '$vote'";
$query = mysqli_query($con, $sql2);
$check2 = mysqli_num_rows($query);

if ($check2 != 0) {
 	die('Sorry, the you have voted for this book already. Please vote for another <a href="index.php">Book.</a>');
}
IF ($vote == 'up') {
 	$sql = "UPDATE library SET voteup = voteup + 1 WHERE itemid = '$itemid'";
	$sql3 = "INSERT INTO votes (ip, itemid, vote) VALUES ('$ip', '$itemid', '$vote')";
}ELSE  {
$sql = "UPDATE library SET votedown = votedown + 1 WHERE itemid = '$itemid'";
$sql3 = "INSERT INTO votes (ip, itemid, vote) VALUES ('$ip', '$itemid', '$vote')";
}
If (!mysqli_query($con,$sql)){
	Die('Error: '.mysqli_error($con));
		}Else{
				
					Echo'Your Vote has have been submitted, check <a href="index.php"> it out.</a>';
				}
Mysqli_close($con);
?>