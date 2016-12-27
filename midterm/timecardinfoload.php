<?php include('header.timecard'); ?>


<?php
$host='dwd277.db.8715276.hostedresource.com';
$usrname= 'dwd277';
$pwrd= 'Sctd#5440';
$database= 'dwd277';

$con = mysqli_connect($host, $usrname, $pwrd, $database);
$userid= mysqli_real_escape_string($con, $_POST['userid']);
$username= mysqli_real_escape_string($con, $_POST['username']);


$sql= "SELECT * FROM timecard WHERE user_id = '$userid' and user_name = '$username'";
$query= mysqli_query($con, $sql);


echo "<table style='font-size: 25px' border='1' cellspacing='20'>";
echo "<tr><td>Name</td><td>Payroll ID</td><td>Type</td><td>Data/Time</td></tr>";
while ($rows=mysqli_fetch_assoc($query)){
	
$itemid=$rows['itemid'];
echo "<tr><td>";
echo $rows['first_name'] . ' ' . $rows['last_name']; 
echo "</td><td>";
echo $rows['user_id'];
echo "</td><td>";
echo $rows['punch_type'];
echo "</td><td>";
echo $rows['punch_stamp'];
echo "</td></tr>";
}
echo "</table>";




?>
<?php include('footer.timecard'); ?>