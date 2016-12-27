
<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Comments</title>

<?php include('Middleheader.henryjones'); ?>
    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Me</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li class="active"><a href="comments.php">Comments</a></li>
      <li><a href="register.php">Register</a></li>
	  
    </ul>
<?php include('Bottomheader.henryjones'); ?>
    <h2>Comments</h2>
	<?php include('Contentstart.henryjones'); ?>
	<p>Post a comment</p>
	<br />
	<form action="commentsload.php" method="post">
  <input type='submit' name='submit' value='Post' class='register' />
</form>
<br />
<br />
<?php
$host='hryjones277.db.8715276.hostedresource.com';
$usrname= 'hryjones277';
$pwrd= 'Sctd#4577';
$database= 'hryjones277';


$con = mysqli_connect($host, $usrname, $pwrd, $database);
$sql= "SELECT * FROM commentbox ORDER BY commentid DESC";
$query= mysqli_query($con, $sql);


echo "<table style='font-size: 25px' border='1' cellspacing='20'>";
echo "<tr><td>Name</td><td>Comment</td></tr>";

while($rows=mysqli_fetch_assoc($query))
{
$id=$rows['id'];


echo "<tr><td>";
echo $rows['name'];
echo "</td><td>";
echo $rows['comment'];
echo "</td></tr>";
;}
?>


<?php include('Footer.henryjones'); ?>