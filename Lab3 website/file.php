




<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Book</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<?php include('Middleheader.henryjones'); ?>
    <ul id="menu">
      <li><a href="index.php">Library</a></li>
      <li><a href="userarea.php">User area</a></li>
    </ul>
<?php include('Bottomheader.henryjones'); ?>
    <h2>Vote for your Favourite Book </h2>
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
$itemid = $_GET["itemid"];
$ip = $_SERVER['REMOTE_ADDR'];

$sql="SELECT * FROM library WHERE itemid = '$itemid'";

$query = mysqli_query($con, $sql);

$row = $query->fetch_array();
$score = $row['voteup'] - $row['votedown'];
$title = $row['title'];
$author = $row['author'];

//echo "<input type='hidden' id='hiddenip' value='" . $_SERVER['REMOTE_ADDR'] . "'/>";
//echo "<input type='hidden' name='hiddenid' value='" . $row['itemid'] . "'/>";



?>

<?php
echo "<h1>Title</h1>";
echo "<h2>"; 
echo $title; 
echo "</h2>";
echo "<h1>Author</h1>";
echo "<h2>";
echo $author;
echo "</h2>";


?>
<br />
<span id="score" >
<?php 

echo "<h2>Current voting score</h2>";
echo "<h2>";
echo $score; 
echo "</h2>";

?>
</span>
<form name="register" method="post" action="voting.php">
<p>If you like this book click below</p>
<p><input type="submit" name="voteup" value="Vote up"></p>
<input type="hidden" name="vote" value="up">
<input type="hidden" name="hiddenid" value="<?php echo $itemid; ?>">
<input type="hidden" name="hiddenip" value=" <?php echo $ip; ?> ">
</form>
<form name="register" method="post" action="voting.php">
<p>If you dont like this book click below</p>
<p><input type="submit" name="votedown" value="Vote Down"></p>
<input type="hidden" name="vote" value="down">
<input type="hidden" name="hiddenid" value="<?php echo $itemid; ?>">
<input type="hidden" name="hiddenip" value=" <?php echo $ip; ?> ">
</form>


<!--<input type="button" id="voteup" value="Want to Vote up click below">
<br />
<input type="button" id="votedown" value="Want to Vote down click below">-->



<?php include('Footer.henryjones'); ?>