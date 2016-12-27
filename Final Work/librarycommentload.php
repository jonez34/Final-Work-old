<?php
// resource Url;http://www.findsourcecode.com/php/how-to-create-comment-box-in-php-all-language-support/) 
//starts login check session, if not logged in will redirect you to login page
session_start();
if (!isset( $_SESSION['myusername'] ) ){
header("location:login.php");

}
//database info
$host='spartandevelomentcom.ipagemysql.com';
$usrname= 'spartandb';
$pwrd= 'shadow34';
$database= 'spartandb';

//COnnection to database
$con = mysql_connect($host, $usrname, $pwrd, $database);
//Data posted from form
$itemid= mysql_real_escape_string($con, $_POST['hiddenid']);
 
$username= $_SESSION['myusername'];

echo $itemid;
?>
<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Comments Load</title>

<?php include('Middleheader.henryjones'); ?>
<!-- created navigation header for website -->

    <ul id="menu">
      <li><a href="index.php">Library</a></li>
      <li><a href="userarea.php">User area</a></li>
    </ul>
<?php include('Bottomheader.henryjones'); ?>
    <h2>Comments Load</h2>
	<?php include('Contentstart.henryjones'); ?> 
	<!-- creates comment section and directs to the load data page on submit -->
<form name="Comment" action="librarycommentloaddata.php" method="POST">
	<table>
	<input type="hidden" name="hiddenname" value="<?php echo $username; ?>">
	<input type="hidden" name="hiddenid" value="<?php echo $itemid; ?>">
	<tr><td colspan="2">Comment: </td></tr>
	<tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
	<tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
	</table>
	</form>
	
	<?php include('Footer.henryjones');