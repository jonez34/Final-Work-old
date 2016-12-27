
<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Library</title>

<?php include('Middleheader.henryjones'); ?>
    <ul id="menu">
      <li class="active"><a href="index.php">Library</a></li>
      <li><a href="userarea.php">User area</a></li>
    </ul>
<?php include('Bottomheader.henryjones'); ?>
    <h2>Library</h2>
	<?php include('Contentstart.henryjones'); ?>
	<p>Welcome</p>
	<br />
	
<br />
<br />
<?php
//database info
$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';

//database connection string
$con = mysqli_connect($host, $usrname, $pwrd, $database);
//sql database select
$sql= "SELECT * FROM library ORDER BY itemid";
$query= mysqli_query($con, $sql);

//table and data presentation 
echo "<table style='font-size: 25px' border='1' cellspacing='20'>";
echo "<tr><td>Title</td><td>Author</td><td>Year</td><td>Type</td></tr>";
while ($rows=mysqli_fetch_assoc($query)){
	
$itemid=$rows['itemid'];
echo "<tr><td>";
echo $rows['title'];
echo "</td><td>";
echo $rows['author'];
echo "</td><td>";
echo $rows['year'];
echo "</td><td>";
echo $rows['type'];
echo "</td></tr>";
}
echo "</table>";
?>


<?php include('Footer.henryjones'); ?>