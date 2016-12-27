
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
$host='spartandevelomentcom.ipagemysql.com';
$usrname= 'spartandb';
$pwrd= 'shadow34';
$database= 'spartandb';


$con = mysql_connect($host, $usrname, $pwrd, $database);
$sql= "SELECT * FROM library ORDER BY itemid";
$query= mysql_query($con, $sql);


echo "<table style='font-size: 25px' border='1' cellspacing='20'>";
echo "<tr><td>Title</td><td>Author</td><td>Year</td><td>Type</td><td>Votes</td></tr>";
while ($rows=mysql_fetch_assoc($query)){
	
$itemid=$rows['itemid'];
echo "<tr><td>";
echo "<a href='file.php?itemid=$itemid'>" . $rows['title'] . "</a>";
echo "</td><td>";
echo $rows['author'];https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0CB4QFjAAahUKEwi966XMhNzHAhWJTpIKHaclAiI&url=http%3A%2F%2Fstackoverflow.com%2Fquestions%2F139474%2Fhow-can-i-capture-the-result-of-var-dump-to-a-string&usg=AFQjCNG_mD76cZypbzlV-kuGQ9KRLZrzOQ&sig2=nEMoukQlVurP5cVfNI1quw
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