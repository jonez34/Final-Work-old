
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
$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';


$con = mysqli_connect($host, $usrname, $pwrd, $database);
$sql= "SELECT * FROM library ORDER BY itemid";
$query= mysqli_query($con, $sql);


echo "<table style='font-size: 25px' border='1' cellspacing='20'>";
echo "<tr><td>Title</td><td>Author</td><td>Year</td><td>Type</td><td>Votes</td></tr>";
while ($rows=mysqli_fetch_assoc($query)){
	
$itemid=$rows['itemid'];
echo "<tr><td>";
echo "<a href='file.php?itemid=$itemid'>" . $rows['title'] . "</a>";
echo "</td><td>";
echo $rows['author'];
echo "</td><td>";
echo $rows['year'];
echo "</td><td>";
echo $rows['type'];
echo "</td><td>";
echo $rows['voteup'] - $rows['votedown'];
echo "</td></tr>";
}
echo "</table>";



//$title=$rows['title'];
//$author=$rows['author'];
//$year=$rows['year'];
//$type=$rows['type'];

//echo $title . '<br/>' . '<br/>' . $author . '<br/>' . '<br/>' . $year . '<br/>' . '<br/>' . $type . '<br/>' . '<br/>' .'<hr size="1"/>'

?>


<?php include('Footer.henryjones'); ?>