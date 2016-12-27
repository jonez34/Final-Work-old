<?php
// resource Url;http://www.findsourcecode.com/php/how-to-create-comment-box-in-php-all-language-support/) 
//starts login check session, if not logged in will redirect you to login page
session_start();
if (!isset( $_SESSION['myusername'] ) ){
header("location:login.php");

}
$username = $_SESSION['myusername'];
?>
<?php include('Topheader.henryjones'); ?>
<title>DWD277HenryJones | Comments Load</title>

<?php include('Middleheader.henryjones'); ?>
<!-- created navigation header for website -->

    <ul id="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About Me</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="comments.php">Comments</a></li>
      <li><a href="register.php">Register</a></li>
	  
    </ul>
<?php include('Bottomheader.henryjones'); ?>
    <h2>Comments Load</h2>
	<?php include('Contentstart.henryjones'); ?> 
	<!-- creates comment section and directs to the load data page on submit -->
<form name="Comment" action="commentsloaddata.php" method="POST">
	<table>
	<input type="hidden" name="hiddenid" value="<?php echo $username; ?>">
	<tr><td colspan="2">Comment: </td></tr>
	<tr><td colspan="5"><textarea name="comment" rows="10" cols="50"></textarea></td></tr>
	<tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
	</table>
	</form>
	
	<?php include('Footer.henryjones');